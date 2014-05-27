<?php 
	class MotoHelpers {
		public static function getcoinsvolume($n) {
			if ($n==0) return 3 * 150000;
			if ($n<200000)                 return self::getcoinsvolume(0)         + $n*100;
			if ($n>=200000  && $n<400000)  return self::getcoinsvolume(200000-1)  + ($n-200000+1)*50;
			if ($n>=400000  && $n<600000)  return self::getcoinsvolume(400000-1)  + ($n-400000+1)*25;
			if ($n>=600000  && $n<800000)  return self::getcoinsvolume(600000-1)  + ($n-600000+1)*12;
			if ($n>=800000  && $n<1000000) return self::getcoinsvolume(800000-1)  + ($n-800000+1)*6;
			if ($n>=1000000 && $n<1200000) return self::getcoinsvolume(1000000-1) + ($n-1000000+1)*3;
			if ($n>=1200000)               return self::getcoinsvolume(1200000-1) + ($n-1200000+1)*2;
		}
	}
?>