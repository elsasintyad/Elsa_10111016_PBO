<?php
class customException extends Exception {
    public function errorMessage() {
        // Pesan error custom
        $errorMsg = "Error caught on line " . $this->getLine() . " in " . $this->getFile() . ": "
                  . $this->getMessage() . " tidak mengandung kata 'lab4/lab5' dan tidak valid "
                  . "is no valid E-Mail address<br>";
        return $errorMsg;
    }
}

// Array email
$emails = [
    "lab4a@polsub.ac.id",
    "lab4b@polsub.ac.id",
    "lab4c@polsub.ac.id",
    "lab4d@polsub.ac.id",
    "lab5a@polsub.ac.id",
    "lab5b@polsub.ac.id",
    "lab5c@polsub.ac.id",
    "someone@example.com"
];

$lab4 = 0;
$lab5 = 0;
$lain = 0;

foreach ($emails as $email) {
    try {
        // Validasi format email
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
            throw new customException($email);
        }

        // Cek apakah mengandung 'lab4' atau 'lab5'
        if (strpos($email, "lab4") !== false) {
            echo "$email mengandung kata 'lab4' dan E-mail valid<br>";
            $lab4++;
        } elseif (strpos($email, "lab5") !== false) {
            echo "$email mengandung kata 'lab5' dan E-mail valid<br>";
            $lab5++;
        } else {
            throw new customException($email);
        }

    } catch (customException $e) {
        echo $e->errorMessage();
        $lain++;
    }
}

// Output hasil akhir
echo "<br>Terdapat $lab4 email lab 4 dan $lab5 email lab 5<br>";
echo "Terdapat $lain email bukan lab4/5<br>";
?>
