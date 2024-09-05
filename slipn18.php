<?php
interface TeacherDetails {
    public function setDetails($tno, $tname, $address, $contact);
    public function displayDetails();
}

class Teacher implements TeacherDetails {
    private $tno, $tname, $address, $contact;

    public function setDetails($tno, $tname, $address, $contact) {
        $this->tno = $tno;
        $this->tname = $tname;
        $this->address = $address;
        $this->contact = $contact;
    }

    public function displayDetails() {
        echo "Teacher Details:<br>";
        echo "TNO: {$this->tno}<br>";
        echo "TName: {$this->tname}<br";
        echo "Address: {$this->address}<br>";
        echo "Contact: {$this->contact}<br>";
    }
}

$teacher = new Teacher();
$teacher->setDetails("T123<br>", "kamilsir<br>", "galgoan<br>", "9909999888");
$teacher->displayDetails();
?>
