<html>

<h3>Hey There, </h3>

<h4>You have new message from, <b>{{$arrMailData['name']}} - <a href="mailto:{{$arrMailData['email']}}">{{$arrMailData['email']}}</a></b></h4>

<div style="font-size:20px;border-radius:4px;padding:10px;background-color:#00BCD4">
	<p>Message : {{$arrMailData['message']}}</p> 
</div>

</html>