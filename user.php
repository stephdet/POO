



class User
{

public $firstname;
public $lastname;
public $age;

public function __construct($fname, $lname)
{
    $this->firstname = $fname;
    $this->lastname = $lname;
}

public function displayName()
{
    return $this->firstname . " " . $this->lastname . " age :" . $this->age;
}

public function setAge($age)
{
    $this->age = $age;
}

public function boiteDeNuit()
{
    if ($this->age > 18) {
        echo "vous etes majeur";
    } else {
        echo "vous etes mineur";
    }
}
}

$user1 = new User("Kevin", "Somao");
$user2 = new User("Stephane", "dethy");
/*
echo $user1->firstname;
echo "<br>";
echo $user1->lastname;*/
$user1->setAge(26);

echo $user1->displayName();
echo "<br>";
$user2->setAge(5);
echo $user2->displayName();
echo "<br>";
$user2->boiteDeNuit();
?>
