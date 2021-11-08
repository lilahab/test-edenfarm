$data = array(
  0 => array(
  'id' => 1,
  'name' => 'Foo', 
  'image' => array(
  	'url' => '/pub/foo.jpg')
  ),
  1 => array(
  'id' => 2,
  'name' => 'Bar', 
  'image' => array(
  	'url' => '/pub/bar.jpg')
  ),
  2 => array(
  'id' => 3,
  'name' => 'Foo Bar', 
  'image' => array(
  'url' => '/pub/foobar.jpg')
  ) );
  
foreach($data as $key){
    	echo $key['id'] . "=>" . $key['image']['url'];
        echo "<br>";
}
