<?php
require_once('contactFunctionDb.php.php');
session_start();
try {
    $contact = new contact();
    $contact->SetIdContact($_GET['id']);
    if (isset($_GET['id'])) {

        if ($_GET['req'] == 'delete') {
            if ($contact->Delete()) header("Location:contact.php");
        } else if ($_GET['req'] == 'update') {
            $contact = new contact();
            $contact->SetIdContact($_GET['id']);
            $rows = $contact->SelectOne();
            if (isset($_POST['update'])) {
                $contact->SetName($_POST['name']);
                $contact->SetEmail($_POST['email']);
                $contact->SetPhone($_POST['phone']);
                $contact->SetAddress($_POST['address']);
                if ($contact->update())  header("Location:contact.php");
            }
         }
    }
} catch (Exception $exc) {
    echo $exc->getMessage();
}

if ($_GET['req'] == 'logout') {
    session_destroy();
    header("Location: login.php");
}
?>