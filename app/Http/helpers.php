<?php

			

			function search(){
	
			$s=Item::where('title', $skey)
			 ->orWhere('description', $skey)->get();
	
				}
	
			function getFav($id){
				
				$sagir = User::find($id);
				return count(unserialize($sagir->my_like));
				}
				

				function sagir(){
				
				}
		
		


		function checkCart(){
			//echo "Alhamdulillah"; exit;
		$sagir=Cart::where('user_id', Auth::user()->id)->count();
		return intVal($sagir);
			
			}
	

		function getTotalSale($id){
		
		
		$sl =Order::where('id',$id)->count();
		
		
		return $sl; 
		}


		function getTotalRemain($id){
		
		$a = Item::findorfail($id);
		$dur= $a->qty;
		$sl =Order::where('id',$id)->where('status', 'delivered')->count();
		$r=intVal(intVal($dur)-intVal($sl));
		
		return $r;
		}
		
		//to get total item remain in store
		function getOverallRemain(){
		$t=0;
		$a = Item::all();
		foreach($a as $n){
		$dur= $n->qty;
		$sl =Order::where('status', 'delivered')->count();
		$r=intVal(intVal($dur)-intVal($sl));
		$t = $t + $r;
		}
		return $t;
		}
		
		//to get total item cost remain in store
		function getOverallPrice(){
		$t=0;
		$a = Item::all();
		foreach($a as $n){
		$dur= $n->qty;
		$sl =Order::where('status', 'delivered')->count();
		$r=intVal(intVal($dur)-intVal($sl))*intVal($n->price);
		$t = $t + $r;
		}
		return $t;
		}
		
		//to get total item cost remain in ordered
		function getOverallOrderPrice(){
		$t=0;
		$a = Order::where('payment', 'verified')->get();
		foreach($a as $n){
		$dur= $n->qty;
		
		$r = intVal($n->qty)*intVal($n->price);
		$t = $t + $r;
		}
		return $t;
		}
		
		//to get total item remain in ordered
		function getOverallOrderRemain(){
		$t=0;
		$a = Order::all();
		foreach($a as $n){
		$dur= $n->qty;
		$sl =Order::where('payment', 'verified')->count();
		$r=intVal($sl);
		$t = $t + $r;
		}
		return $t;
		}
		
		//profit calculator
		function getOverallProfit(){
		$t=0;
		$a = Order::where('payment', 'verified')->get();
		foreach($a as $n){
		$dur= $n->qty;
		
		$r = intVal($n->qty)*intVal($n->price);
		$t = $t + $r;
		}
		return $t;
		}
		
		
		//to get total item remain in ordered
		function getTotalVoucher($id){
		$t=0;
		$a = Voucher::all();
		foreach($a as $n){
		$dur= $a->amount;
		
		$r=$dur;
		$t = $t + $r;
		}
		return $t;
		}


		function underVerification(){
		
		$s= Order::where('payment', 'status')->count();
		return $s;
		}


 
		
		function getLikes($id){
		
		$lks = Postfood::find($id);
		$r = count(serialize($lks->my_like));
		
					if($r<=5){
						return $rt=1;
						}
					elseif($r>5 &&$r<=10){
					return $rt=2;
					}
					elseif($r>10 &&$r<=15){
						return $rt=3;
						}
					elseif($r>15 &&$r<=20){
						return $rt=4;
						}
					else{
						return $rt=5;}
						
		}

		function getTotalPrice($id){
		
		/*$all =Cart::where('user_id', Auth::user()->id)->where('item_id', $id)get();
		//$cartct = Cart::where('item_id',$id)->count();
		foreach($all as $al){
		
			$total=intVal(intVal($al->price)*intVal($al->qty));
			$y=$y+$total;
		}
		
		return $all->price; */
		}



			function getTotal($id){
			$y=0;
			$all =Cart::where('user_id',$id)->where('status','on')->get();
			$cartct =Cart::where('user_id',$id)->count();
			if($cartct==0){
				return $total=0;
			}
			
			else{
				
			foreach($all as $al){
			
				$total=intVal(intVal($al->price)*intVal($al->qty));
				$y=$y+$total;
			}
			
			return $y; }
			}
			
			
			function getTotalCount($id){
			
			
			$cartct =Cart::where('user_id',$id)->count();
			
			
			return $cartct; 
			}
			
			
			function getTotalComment($id){
			
			
			$c =Comment::where('post_id',$id)->count();
			
			
			return $c; 
			}
			




	
	
	
	
	//preceeding zeros... 
	
	function zeroIt($v){
		if(intval($v) < 10){
			return '0' . $v;
		}else{
			return $v;
		}
	}
	
	//create a function that collects the subject ID... 
	
	
	
		function r(){
		
		$chars = '0123456789';
		$s = substr(str_shuffle(str_repeat($chars, 5)), 0, 5);
		return $s;			
		}
	
	
	
	function ref($id){
	
	$r = "atampa".$id.date("ymhis").r();
	$s = Order::where('ref', $r)->count();
	if($s > 0){
	ref($id);
	}
	else{
	
	return  $r="atampa".$id.date("ymhis").r();
	
	}
	
	 
	
	}
	
	
	
	
	
	
	//add leading Zeros....
	function Zeros($id, $ct){
	
		$v = 0;
		
		switch($ct){
		
			case '3':
				if($id < 1000 && $id >= 100){
					$v = strval($id);
				}else if($id < 100 && $id >= 10){
					$v = '0'.strval($id);
				}else if($id < 10){
					$v = '00' . strval($id);
				}else{
					$v = $id;
				}
				break;
			case '4':
				if($id < 1000 && $id >= 100){
					$v = '0'.strval($id);
				}else if($id < 100 && $id >= 10){
					$v = '00'.strval($id);
				}else if($id < 10){
					$v = '000' . strval($id);
				}else{
					$v = $id;
				}
				break;
		}
		
		return $v;
	}
	
	
	
	



	
