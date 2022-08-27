<!DOCTYPE HTML>
<html>
    <head><title>sending e-mail</title>
    </head>
    <body>
    <h1>Type your message and subject, then send the mail.</h1>
    <form method="post" action="/send-email">
        <input type="hidden" name="_token" value="{{{csrf_token()}}}">
        To:<input type="email" name="txtSendTo">
        Subject:<input type="text" name='txtSubject'>
        Message:<input type="text" name='txtMessage'>
        <input type="submit" value="Send">

    </body>
</html>
