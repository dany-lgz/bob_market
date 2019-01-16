<form id='register' action='/addTag' method='post' 
    accept-charset='UTF-8'>
<fieldset >
<legend>Register</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>
<label for='firstname' >Prénom*: </label>
<input type='text' name='firstname' id='firstname' maxlength="50" />
<label for='familyname' >Nom*: </label>
<input type='text' name='famname' id='famname' maxlength="50" />
<label for='email' >Adresse Email*:</label>
<input type='text' name='email' id='email' maxlength="50" />
<label for='telephone' >Téléphone*: </label>
<input type='text' name='telephone' id='telephone' maxlength="10" />
<label for='adresse' >Adresse*: </label>
<input type='text' name='adresse' id='adresse' maxlength="50" />
<label for='codepostal' >Code Postal*: </label>
<input type='text' name='codepostal' id='codepostal' maxlength="5" />
<label for='ville' >Ville*: </label>
<input type='text' name='ville' id='ville' maxlength="50" />
<label for='orientation' >Orientation*: </label>
<input type='text' name='orientation' id='orientation' maxlength="50" />
<input type='submit' name='Submit' value='Submit' />

</fieldset>
</form>
