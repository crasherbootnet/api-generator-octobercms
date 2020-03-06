<?php namespace AhmadFatoni\ApiGenerator\Helpers;

Class Helpers {

	public function apiArrayResponseBuilder($statusCode = null, $message = null, $data = [])
	{
		$arr = [
			'status_code' => (isset($statusCode)) ? $statusCode : 500,
			'message' => (isset($message)) ? $message : 'error'
		];
		if(is_array($data)){
			if (count($data) > 0) {
				$arr['data'] = $data;
			}else{
				$arr['data'] = [];
			}
		}else{
			if ($data) {
				$arr['data'] = $data;
			}else{
				$arr['data'] = [];
			}
		}
		return response()->json($arr, $arr['status_code']);
		
	}
}