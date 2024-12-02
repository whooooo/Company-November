<!-- base fare is 8 for the first 4 kilometers.
for each succeeding kilometer, 
add 1.Apply 20% discount to passengers 60 y,o, and above
最初の 4 キロメートルの基本運賃は 8 です。
以降の 1 キロメートルごとに 1 が加算されます。
60 歳以上の乗客には 20% 割引が適用されます -->
<?php
    class Fare{
        private $fare=8;
        private $age;
        private $km;
        

        #method
        public function showFare()
        {
          if($this->age>59){ 
            if($this->km>4){
                $fare=$this->km+4;
                return $fare*0.8;
            }else{
                $fare=$this->fare;
                return $fare*0.8;
            }
          }else{
            if($this->km>4){
                $fare=$this->km+4;
                return $fare;
            }else{
                $fare=$this->fare;
                return $fare;
            }
          }
        }
        public function showAge()
        {
            echo $this->age;
        }
        public function showKm()
        {
            echo $this->km;
        }
        
        #setter
        public function setKm($km)
        {
            $this->km=$km;
        }
        
        public function setAge($age)
        {
            $this->age=$age;
        }
        
        #getter
        public function getAge()
        {
            return $this->age;
        }
        public function getKm()
        {
            return $this->km;
        }
        public function getFare()
        {
            return $this->showFare();
        }
    }



?>