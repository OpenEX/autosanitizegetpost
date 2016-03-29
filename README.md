# autosanitizegetpost
It is a starting point of an idea - not tested in real life well: POST, GET sanitization, seems useful when someone is not sure if a website/app is protected against attacks.

Try to use it this way somewhere at the top of your page/application

if (!empty($_POST)) {
            $this->sanitizePost();
}
  
if (!empty($_GET)) {
            $this->sanitizeGet();
}
