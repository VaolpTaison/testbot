<?php
$confirmation_token = '0eb95f9d';
$token = 
'62069ada9140b027f1cd84c1155df643d6fc180124dc3d63e244ab4b34f25c9cc22a6295b00249d257bc5';
$data = json_decode(file_get_contents('php://input'));
switch($data->type){
	case 'confirmation':
		echo $confirmation_token;
	break;
	case 'message_new':
		$user_id = $data->object->user_id;
		$user_info =
		json_decode(file_get_contents("https://api.vk.
		com/method/users.get?user_ids=
		{$user_id0}&v=5.0"));
		user_name = $user_info->response[0]-
		>first_name;
		$message = $data->object->body;
		$messages_array = [
			'Привет добби' => "Привет {$user_name}!",
			'Как дела?' => "Да всё огонь!",
			'Что мутиш?' => "Сижу, скучаю, ты чем занят?"
		];
		foreach ($messages_array as $k => $v) {
			if($message == k){$otvet = $v;}
		}
		$request_params = [
			'message' => $otvet,
			'user_id' => $user_id,
			'access_token' =>$token,
			'v' = '5.0'
		];
		$get_params = 
		http_build_query($request_params);

		 file_get_contents('htttps://api.vk.com/method/
		messages.send?'.$get_params);
		echo('ok');
		break;
		return false;
}
