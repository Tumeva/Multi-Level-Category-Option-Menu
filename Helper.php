<?php
    public function createCategory($f, $c_id = 0): array
    {
        $a = array();
        foreach ($f as $i) {
            if ($i['category_id'] == $c_id) {
                $sub = $this->createCategory($f, $i['id']);
                if ($sub) {
                    $i['sub'] = $sub;
                } else {
                    $i['sub'] = array();
                }
                $a[] = $i;
            }
        }
        return $a;
    }
    public function listCategory($f, $c_id = 0, $s = 0){
        foreach ($f as $c){
            echo "<option value=\"" . $c['id'] . "\"";
            if($s)
            foreach($s as $value)
            {
                if ($c['id'] == $value) {
                    echo " selected";
                }
            }
            echo ">";
            for ($i = 0; $i < $c_id; $i++) {
                echo " - ";
            }
            echo $c['title'];
            echo "</option>\n";
            if ($c['sub'] == null) {
                $c_id = 0;
            }
           $this->listCategory($c['sub'],$c_id+ 1,$s);
        }
    }
?>
