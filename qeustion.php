exec("ls ./ -al",$output);

while(list($key,$val)=each($output))
{
echo $key."=>" ."$val". "
";
}
