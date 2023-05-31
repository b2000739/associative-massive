<?
function transliterator($word)
{
	$letters = array(
		'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
		'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i',
		'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
		'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
		'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch',
		'ш' => 'sh', 'щ' => 'csh', 'ь' => '', 'ы' => 'y', 'ъ' => '',
		'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
	);
	$massive = (preg_split("//u", $word, -1, PREG_SPLIT_NO_EMPTY));
	for ($i = 0; $i < count($massive); $i++) {
		echo $letters[$massive[$i]];
	}
};
transliterator('Крайне');
echo '<br>';
transliterator('хорошая');
echo '<br>';
transliterator('функция');
$sities = array(
	'Московская область' => array('Москва', 'Зеленоград', 'Kлин', 'Всеволжье'),
	'Ленинградская область' => array('Санкт-Pетербург', 'Всеволожск', 'Равловск', 'Kрондштадт'),
	'Рязанская oбласть' => array('Рязань', 'Сасово', 'Михайлов', 'Скопин')
);
foreach ($sities as $key => $value) {
	echo '<br><br>';
	echo $key . ': ';
	echo '<br>';
	for ($i = 0; $i < count($value); $i++) {
		echo $value[$i] . ', ';
	}
}
echo '<br><br>';
echo '<br><br>';
foreach ($sities as $key => $value) {
	for ($i = 0; $i < count($value); $i++) {

		if ($value[$i][0] == 'K') {
			echo $value[$i];
			echo '<br>';
		}
	}
}
