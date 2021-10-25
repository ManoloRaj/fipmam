
    <?php
    $retour = mail('fipmam.imerintsiafindra@gmail.com',$_POST['subject'] , $_POST['message'].' Email From : '.$_POST['mail'], $_POST['name'] );
    if ($retour) {
        echo '<p>Your message has been send successfully.</p> </br><a href="http://fipmam-madagasikara.mdg.ooo/">Return to home page</a>';
        header('Location: http://fipmam-madagasikara.mdg.ooo/contact.html');

        Exit();
    }
    ?>
<html></html>
