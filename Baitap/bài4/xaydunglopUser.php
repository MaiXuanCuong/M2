<?php
 class User {
    protected $name;
    protected string $email;
    public int $role;

    public function getInfo() {
        return $this->isAdmin()."<br>". "Tên: ".$this->name."<br>"."Email: ".$this->email;
    }
    public function isAdmin(){
        if ($this->role == 1){
            echo "Admin";
        } else{
            echo "Người dùng bình thường"  ;
        }
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setRole($role) {
        $this->role = $role;
    }  
} 
$admin = new User();
$admin->setName("Xuân Cường");
$admin->setEmail('mxc@gmail.com');
$admin->setRole(2);
echo $admin->getInfo();
    






















 



?>
