

<center><h1> Welcome </h1></center>

{{"User id:" .$id}}
</br>
{{"Nom :" .$Nom}}
</br>
{{"Prénom :" .$Prénom}}

@for($i=0;$i<10;$i++)
	{{"hello world !!"}}
	</br>
@endfor
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('js/app.js') }}">
</head>
<body>
<form>
	
		 {{ csrf_field() }}
         <div class="col-md-4">
         <label class="col-md-8 control-label">Description Produit :</label>   
		<input type="text" name="description" class="form-control "   placeholder="Description du Produit" required>
	
</form>
</body>
</html>
