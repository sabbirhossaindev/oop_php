<?php
include("trait_using.php");
include("codemanbdteam.php");

class AgencyTeam extends Codemanbd{
    use Marketing;
    use Outcourse;
}
echo "apply to trait using";
$callagency = new AgencyTeam();
echo $callagency->client();
echo "<br>";
echo $callagency->developer();

?>