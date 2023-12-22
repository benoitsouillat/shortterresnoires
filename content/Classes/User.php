<?php
// session_start();

class User
{
    private $userID = 0;
    private $username = "";
    private $email = "";
    private $password = "";
    private $avatar = "";
    private $role = "user";

    public function __construct(
        string $username = "",
        string $email = "",
        string $password = "",
        string $avatar = "../../src/img/user-default.jpg",
        string $role = 'user'
    ) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->avatar = $avatar;
        $this->role = $role;
    }

    public function fillFromStdClass(stdClass $std)
    {
        $this->setUserID($std->id ?? 0);
        $this->setUsername($std->username ?? "unknown");
        $this->setEmail($std->email ?? "unknown");
        $this->setPassword($std->password);
        $this->setAvatar($std->avatar);
        $this->setRole($std->role);
    }

    public function fillFromSession(array $session)
    {
        $this->setUsername($session['username']);
        $this->setEmail($session['email']);
        $this->setAvatar($session['avatar']);
        $this->setRole($session['role']);
    }

    public function connect(PDO $conn, string $email, string $password)
    {
        $stmt = $conn->prepare("SELECT * FROM `users` WHERE `email` = :email");
        $stmt->bindParam(':email', $email);

        try {
            $stmt->execute();
            $DBuserData = $stmt->fetch(PDO::FETCH_OBJ);
            if ($DBuserData == true) {
                $this->fillFromStdClass($DBuserData);
            } else {
                $_SESSION = [];
                session_destroy();
                header("Location:../../../content/login.php?error=badlog");
            }
            $hash = $this->password;
            if (password_verify($password, $hash)) {
                $_SESSION['username'] = $this->username;
                $_SESSION['email'] = $this->email;
                $_SESSION['role'] = $this->role;
                $_SESSION['avatar'] = $this->avatar;
                header('Location:../Controllers/administration.php');
            } else {
                $_SESSION = [];
                session_destroy();
                header("Location:../../../content/login.php?error=badlog");
            };
        } catch (PDOException $e) {
            var_dump("Une Erreur s'est produite lors de la recherche de cet email !! " . $e);
        }
    }

    public function register(PDO $conn, string $username, string $email, string $password)
    {

        $this->setUsername($username);
        $this->setEmail($email);
        $this->setPassword(password_hash($password, PASSWORD_BCRYPT));

        $stmt = $conn->prepare("SELECT * FROM `users` WHERE `email` = :email");
        $stmt->bindValue(':email', $this->email);
        $stmt->execute();
        if ($stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "Erreur : L'email existe déjà";
            session_start();
            $_SESSION = [];
            header("Location:../login.php?error=badlog");
        } else {
            $stmt = $conn->prepare("INSERT INTO `Users` (username, email, password, avatar) VALUES (:username, :email, :password, :avatar)");
            $stmt->bindValue(':username', $this->username);
            $stmt->bindValue(':email', $this->email);
            $stmt->bindValue(':password', $this->password);
            $stmt->bindValue(':avatar', $this->avatar);
            try {
                $stmt->execute();
            } catch (PDOException $e) {
                echo "Une erreur s'est produite durant l'enregistrement : " . $e;
            }
        }
    }

    public function checkRole()
    {
        if ($this->role === 'Admin') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the value of username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of userID
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Set the value of userID
     *
     * @return  self
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of avatar
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set the value of avatar
     *
     * @return  self
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get the value of role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}
