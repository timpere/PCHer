<div id="Home">
    <div id="foto">
        <img src="assets/img/plaatje.jpg">

         </div>

<p>Welcome bij DataDate!!</br>
    De datingsite waar u gematcht wordt op basis van uw persoonlijkheid en likes die u geeft aan andere gebruikers van deze site.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus tellus nulla, nec condimentum tortor tristique eget. Aliquam dapibus elit sed nulla convallis commodo. Mauris nec dapibus est. Etiam ipsum enim, imperdiet sit amet sapien vitae, mattis venenatis sem. Sed posuere felis non odio auctor, porttitor tempus ligula condimentum. Phasellus lectus sem, fringilla nec nunc quis, mollis viverra justo.
</p>

<div id="previews">
    <div class="preview">
        <?php

        $max = $this->db->count_all_results('Persoon');
        $id = rand (1, $max);
        $query = $this->db->select('nickname, leeftijd, geslacht, beschrijving, persoonlijkheidstype')->from('Persoon')

            ->group_start()
            ->where('id', $id )
            ->group_end()
            ->get();

        $query2 = $this->db->select('CocaCola, Google')->from('Merkvoorkeur')
            ->group_start()
            ->where('id', $id )
            ->group_end()
            ->get();

        foreach ($query->result() as $row)
        {
            if ($row->geslacht == 'm') {
                echo '<a href= ><div class="thumbnail"> <img src="assets/img/man.jpg" id="thumbnail"></div></a>';
            }
            else{

                echo '<a href= > <div class="thumbnail"> <img src="assets/img/vrouw.jpg" id="thumbnail"></div></a>';
            }


            echo "Naam ". anchor('/mijngegevens/', $row->nickname, $row->nickname) . "<br>";
            echo "Leeftijd: ".$row->leeftijd."<br>";
            echo "Geslacht: ".$row->geslacht . "<br>";
            echo "Type: ".$row->persoonlijkheidstype . "<br>";
            echo substr($row->beschrijving, 0,50) . "...<br>";
            echo 'Merkvoorkeuren: ' . "<br>";
            foreach ($query2->result() as $row2) {
                if($row2-> CocaCola == 1){
                    echo 'Coca-Cola' . "<br>";
                }
                else{
                    echo null;
                }


            }
            foreach ($query2->result() as $row2) {
                if($row2-> Google == 1){
                    echo 'Google';
                }
                else{
                    echo null;
                }

            }
        }

        ?>

    </div>

    <div class="preview">
        <?php

        $max = $this->db->count_all_results('Persoon');
        $id = rand (1, $max);
        $query = $this->db->select('nickname, leeftijd, geslacht, beschrijving, persoonlijkheidstype')->from('Persoon')

            ->group_start()
            ->where('id', $id )
            ->group_end()
            ->get();

        $query2 = $this->db->select('CocaCola, Google')->from('Merkvoorkeur')
            ->group_start()
            ->where('id', $id )
            ->group_end()
            ->get();

        foreach ($query->result() as $row)
        {
            if ($row->geslacht == 'm') {
                echo '<a href= ><div class="thumbnail"> <img src="assets/img/man.jpg" id="thumbnail"></div></a>';
            }
            else{

                echo '<a href= > <div class="thumbnail"> <img src="assets/img/vrouw.jpg" id="thumbnail"></div></a>';
            }


            echo "Naam ". anchor('/mijngegevens', $row->nickname) . "<br>";
            echo "Leeftijd: ".$row->leeftijd."<br>";
            echo "Geslacht: ".$row->geslacht . "<br>";
            echo "Type: ".$row->persoonlijkheidstype . "<br>";
            echo substr($row->beschrijving, 0,50) . "...<br>";
            echo 'Merkvoorkeuren: ' . "<br>";
            foreach ($query2->result() as $row2) {
                if($row2-> CocaCola == 1){
                    echo 'Coca-Cola' . "<br>";
                }
                else{
                    echo null;
                }


            }
            foreach ($query2->result() as $row2) {
                if($row2-> Google == 1){
                    echo 'Google';
                }
                else{
                    echo null;
                }

            }
        }

        ?>
    </div>

    <div class="preview">
        <?php

        $max = $this->db->count_all_results('Persoon');
        $id = rand (1, $max);
        $query = $this->db->select('nickname, leeftijd, geslacht, beschrijving, persoonlijkheidstype')->from('Persoon')

            ->group_start()
            ->where('id', $id )
            ->group_end()
            ->get();

        $query2 = $this->db->select('CocaCola, Google')->from('Merkvoorkeur')
            ->group_start()
            ->where('id', $id )
            ->group_end()
            ->get();

        foreach ($query->result() as $row)
        {
            if ($row->geslacht == 'm') {
                echo '<a href= ><div class="thumbnail"> <img src="assets/img/man.jpg" id="thumbnail"></div></a>';
            }
            else{

                echo '<a href= > <div class="thumbnail"> <img src="assets/img/vrouw.jpg" id="thumbnail"></div></a>';
            }


            echo "Naam ". anchor('/mijngegevens', $row->nickname) . "<br>";
            echo "Leeftijd: ".$row->leeftijd."<br>";
            echo "Geslacht: ".$row->geslacht . "<br>";
            echo "Type: ".$row->persoonlijkheidstype . "<br>";
            echo substr($row->beschrijving, 0,50) . "...<br>";
            echo 'Merkvoorkeuren: ' . "<br>";
            foreach ($query2->result() as $row2) {
                if($row2-> CocaCola == 1){
                    echo 'Coca-Cola' . "<br>";
                }
                else{
                    echo null;
                }


            }
            foreach ($query2->result() as $row2) {
                if($row2-> Google == 1){
                    echo 'Google';
                }
                else{
                    echo null;
                }

            }
        }

        ?>

    </div>

    <div class="preview">
        <?php

        $max = $this->db->count_all_results('Persoon');
        $id = rand (1, $max);
        $query = $this->db->select('nickname, leeftijd, geslacht, beschrijving, persoonlijkheidstype')->from('Persoon')

            ->group_start()
            ->where('id', $id )
            ->group_end()
            ->get();

        $query2 = $this->db->select('CocaCola, Google')->from('Merkvoorkeur')
            ->group_start()
            ->where('id', $id )
            ->group_end()
            ->get();

        foreach ($query->result() as $row)
        {
            if ($row->geslacht == 'm') {
                echo '<a href= ><div class="thumbnail"> <img src="assets/img/man.jpg" id="thumbnail"></div></a>';
            }
            else{

                echo '<a href= > <div class="thumbnail"> <img src="assets/img/vrouw.jpg" id="thumbnail"></div></a>';
            }


            echo "Naam ". anchor('/mijngegevens', $row->nickname) . "<br>";
            echo "Leeftijd: ".$row->leeftijd."<br>";
            echo "Geslacht: ".$row->geslacht . "<br>";
            echo "Type: ".$row->persoonlijkheidstype . "<br>";
            echo substr($row->beschrijving, 0,50) . "...<br>";
            echo 'Merkvoorkeuren: ' . "<br>";
            foreach ($query2->result() as $row2) {
                if($row2-> CocaCola == 1){
                    echo 'Coca-Cola' . "<br>";
                }
                else{
                    echo null;
                }


            }
            foreach ($query2->result() as $row2) {
                if($row2-> Google == 1){
                    echo 'Google';
                }
                else{
                    echo null;
                }

            }
        }

        ?>

    </div>
    <div class="preview">
        <?php

        $max = $this->db->count_all_results('Persoon');
        $id = rand (1, $max);
        $query = $this->db->select('nickname, leeftijd, geslacht, beschrijving, persoonlijkheidstype')->from('Persoon')

            ->group_start()
            ->where('id', $id )
            ->group_end()
            ->get();

        $query2 = $this->db->select('CocaCola, Google')->from('Merkvoorkeur')
            ->group_start()
            ->where('id', $id )
            ->group_end()
            ->get();

        foreach ($query->result() as $row)
        {
            if ($row->geslacht == 'm') {
                echo '<a href= ><div class="thumbnail"> <img src="assets/img/man.jpg" id="thumbnail"></div></a>';
            }
            else{

                echo '<a href= > <div class="thumbnail"> <img src="assets/img/vrouw.jpg" id="thumbnail"></div></a>';
            }


            echo "Naam ". anchor('/mijngegevens', $row->nickname) . "<br>";
            echo "Leeftijd: ".$row->leeftijd."<br>";
            echo "Geslacht: ".$row->geslacht . "<br>";
            echo "Type: ".$row->persoonlijkheidstype . "<br>";
            echo substr($row->beschrijving, 0,50) . "...<br>";
            echo 'Merkvoorkeuren: ' . "<br>";
            foreach ($query2->result() as $row2) {
                if($row2-> CocaCola == 1){
                    echo 'Coca-Cola' . "<br>";
                }
                else{
                    echo null;
                }


            }
            foreach ($query2->result() as $row2) {
                if($row2-> Google == 1){
                    echo 'Google';
                }
                else{
                    echo null;
                }

            }
        }

        ?>

    </div>

    <div class="preview">
        <?php

        $max = $this->db->count_all_results('Persoon');
        $id = rand (1, $max);
        $query = $this->db->select('nickname, leeftijd, geslacht, beschrijving, persoonlijkheidstype')->from('Persoon')

            ->group_start()
            ->where('id', $id )
            ->group_end()
            ->get();

        $query2 = $this->db->select('CocaCola, Google')->from('Merkvoorkeur')
            ->group_start()
            ->where('id', $id )
            ->group_end()
            ->get();

        foreach ($query->result() as $row)
        {
            if ($row->geslacht == 'm') {
                echo '<a href= ><div class="thumbnail"> <img src="assets/img/man.jpg" id="thumbnail"></div></a>';
            }
            else{

                echo '<a href= > <div class="thumbnail"> <img src="assets/img/vrouw.jpg" id="thumbnail"></div></a>';
            }


            echo "Naam ". anchor('/mijngegevens', $row->nickname) . "<br>";
            echo "Leeftijd: ".$row->leeftijd."<br>";
            echo "Geslacht: ".$row->geslacht . "<br>";
            echo "Type: ".$row->persoonlijkheidstype . "<br>";
            echo substr($row->beschrijving, 0,50) . "...<br>";
            echo 'Merkvoorkeuren: ' . "<br>";
            foreach ($query2->result() as $row2) {
                if($row2-> CocaCola == 1){
                    echo 'Coca-Cola' . "<br>";
                }
                else{
                    echo null;
                }


            }
            foreach ($query2->result() as $row2) {
                if($row2-> Google == 1){
                    echo 'Google';
                }
                else{
                    echo null;
                }

            }
        }

        ?>

    </div>
  

</div>
    
    <a id="meer" href="javascript:location.reload(true)">Meer profielen</a>


</div>
