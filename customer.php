<?php

function customer_form() {
$customerform[] = '

<form action="" method="post">
<label for="name">Firs name: </label>
    <input type="text" name="name" value="">
        <br>
         <br>
<label for="surname">Surname: </label>
    <input type="text" name="surname" value="">
        <br>
        <br>
<label for="email">Email: </label>
    <input type="text" name="name" value="@">
        <br>
        <br>
<label for="address">Full address</label>
    <input type="text" name="address" value="">
        <br>
        <br>
<label for="card">Card details: </label>
    <input type="text" name="card">
        <br>
        <br>
</form>
';
}
?>


