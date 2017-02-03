<?php 
?>
<h1>Reg</h1>
<form method="POST">
<input type="text" 
       name="login" 
       value="<?=(isset($_POST['login'])) ? $_POST['login'] : '' ?>"
       class="<?=(isset($formErrors['login'])) ? 'error' : ''?>">
<?php if(isset($formErrors['login'])):?>
	<?php var_dump($formErrors['login'])?>
<?php endif;?> 
<button>Submit</button> 
</form>    