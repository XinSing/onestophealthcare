<form action="" id="myform" >
<p>
    <label for='un'>Username:</label>
    <input type="text" id="un" name="un" />
</p>
<p>
    <label for='pn'>Password:</label>
    <input type="password" id="pn" name="pn" />
</p>
<p>
    <label for='em'>EMail:</label>
    <input type="text" id="em" name="em" />
</p>
<p>
    <label for='cn'>Phone:</label>
    <input type="text" id="cn" name="cn" />
</p>


<p>
    <input type="submit" name="submit" value="Submit">
</p>
</form>
<script  type="text/javascript">
 var frmvalidator = new Validator("myform");
 frmvalidator.addValidation("un","req","Please enter your Username");
 frmvalidator.addValidation("un","maxlen=20",
        "Max length for un is 20");
 
 frmvalidator.addValidation("pn","req");
 frmvalidator.addValidation("pn","maxlen=20");
 
 frmvalidator.addValidation("em","maxlen=50");
 frmvalidator.addValidation("em","req");
 frmvalidator.addValidation("em","email");
 
 frmvalidator.addValidation("cn","maxlen=50");
 frmvalidator.addValidation("cn","numeric");
 
 
 
</script>