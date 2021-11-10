<?php
session_start();

if (!isset($_SESSION['theme'])) {
	$_SESSION["theme"] = "main";
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo $_SESSION["theme"]?>.css" id="theme-link">
	<title>Тёмная тема</title>
</head>
<body> 
<div class="wrapper">
	<div class="theme-button" id="theme-button">Сменить тему</div>
	<header class="header">
		<div class="header_content">
			<h1>Сайт с тёмной темой</h1>
			<nav class="nav">
				<div class="nav_content">
					<a href="#" class="nav_item nav_item_active">Главная</a>
					<a href="#" class="nav_item">Новости</a>
					<a href="#" class="nav_item">О нас</a>
					<a href="#" class="nav_item">Контакты</a>
				</div>
			</nav>
		</div>
	</header>
	<main class="main">
		<article class="main_content"> 
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elit nisl, tempus volutpat eros quis, fermentum ultricies urna. Vestibulum a pellentesque mi. Sed volutpat rutrum risus quis auctor. Sed vel nibh lectus. Donec dolor metus, pretium id odio eget, tristique facilisis sem. Donec sit amet magna vitae purus posuere fringilla non quis est. Morbi lorem risus, varius vitae enim nec, malesuada blandit velit. Curabitur venenatis ornare lectus ac tincidunt.

		Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque porta ultricies arcu, a porta urna finibus quis. Aliquam bibendum lacinia aliquam. Donec imperdiet facilisis turpis, ac suscipit felis pretium in. Maecenas consequat tortor sed sapien sodales, nec porta dui volutpat. Maecenas rutrum ultricies rhoncus. Donec sed ipsum erat. Morbi dapibus consectetur ex, a imperdiet quam condimentum a. Suspendisse tincidunt ligula vel tincidunt porttitor. Phasellus eu odio id nunc hendrerit dignissim.

		Praesent elementum justo ornare, varius libero ut, varius elit. Nulla facilisi. Fusce non sodales odio, a pharetra nisl. Morbi erat elit, rutrum quis mi id, dapibus pulvinar lorem. Sed dignissim, sapien sed malesuada hendrerit, ligula orci mattis sapien, eu pulvinar lectus est quis eros. Duis facilisis vel diam id egestas. Proin ac mi risus. Integer facilisis nulla vel pretium consequat. Praesent quis consectetur mauris, in rhoncus tortor. Maecenas dictum rhoncus elit, et auctor mauris feugiat eget. Sed ut scelerisque enim, in laoreet lacus. Quisque arcu quam, commodo sed tincidunt eget, blandit non dui. Ut metus sapien, interdum at eleifend id, maximus in lorem. Etiam sed arcu nunc.

		Suspendisse consectetur elit at libero tristique ultrices. Sed cursus, risus vulputate fringilla pharetra, risus ante facilisis eros, nec mollis felis eros id enim. Nam quis scelerisque diam, ut tempor purus. Curabitur consequat iaculis enim, tincidunt posuere diam lacinia consequat. Morbi orci mauris, vulputate sit amet sagittis congue, ultricies vitae nunc. Vivamus porttitor orci est. Maecenas a nulla pretium, consequat enim at, porta lorem. Quisque posuere libero quis ultrices cursus. Nullam et dolor suscipit, aliquet mauris a, auctor sapien. Donec placerat commodo leo id laoreet. Aliquam bibendum, nunc quis sollicitudin efficitur, est est dapibus lacus, vitae pretium lacus lectus ac mi.

		Aliquam posuere orci quis gravida tincidunt. In in luctus leo. Suspendisse convallis urna neque, quis porta tellus fringilla eget. Mauris imperdiet mi quis mattis mollis. In id magna quis felis semper semper. Nullam nec libero ante. Duis eget nisl condimentum, porttitor purus a, faucibus sapien. Etiam malesuada tempus venenatis. Ut eget purus venenatis felis scelerisque euismod ac sit amet arcu. Proin tempor diam at aliquam mattis. Mauris mattis vestibulum justo, ut ultrices nibh rutrum vel. Sed venenatis tincidunt ligula ac hendrerit. Nullam tristique molestie volutpat. Morbi eu ex sollicitudin, eleifend sapien id, pellentesque massa. Pellentesque tincidunt lacinia pharetra.

		Sed accumsan ante sit amet tortor euismod auctor. Donec metus magna, elementum id malesuada id, lacinia sit amet augue. Nulla convallis, sem non pharetra bibendum, massa magna posuere ex, quis pharetra ligula lorem ac felis. Pellentesque id ultricies enim. Donec malesuada nisi sit amet est pellentesque, in mattis lorem blandit. Suspendisse potenti. Aenean blandit vulputate enim eget efficitur. Vestibulum dignissim eros ante. Aenean sagittis blandit eros, ut elementum odio tempus nec.

		Curabitur commodo nunc diam, ut efficitur nunc mattis blandit. Vivamus aliquam velit ac neque consequat, id condimentum nisl volutpat. Aliquam luctus molestie accumsan. In sit amet ultrices nunc, vel porta libero. Ut risus turpis, pellentesque nec commodo in, lacinia quis lorem. Phasellus lobortis ipsum felis, non tincidunt odio consequat in. Donec euismod eleifend ex, quis congue erat iaculis nec. Phasellus tristique dapibus tincidunt. Aliquam a vehicula mauris. Donec quam dolor, iaculis id diam quis, maximus consequat magna. In sit amet diam mattis, vestibulum odio in, consectetur tortor. Donec ac volutpat ante. Fusce iaculis scelerisque dolor, nec iaculis dui fermentum a.

		Aenean in ex ipsum. Nam et congue turpis. Vivamus porttitor erat sit amet leo commodo, in laoreet ipsum dignissim. Etiam rutrum viverra turpis, a sollicitudin lacus egestas sit amet. Nunc suscipit maximus magna, ac viverra augue congue vel. Vestibulum gravida quam at turpis interdum, in pharetra orci commodo. Integer in urna gravida, semper nunc et, porttitor augue. Aenean fringilla ex in nisi eleifend elementum. Pellentesque posuere, tortor at semper facilisis, metus eros ultricies metus, id aliquam diam neque vitae sapien.

		Integer consectetur congue magna, id placerat velit. Fusce rhoncus purus orci, sit amet lobortis leo laoreet ut. Sed quis gravida dolor. Nunc in efficitur mauris. Donec faucibus bibendum felis eget euismod. Vestibulum ac lectus faucibus, imperdiet leo sit amet, posuere lectus. Etiam et neque lacus. Curabitur volutpat porta lacus, eu elementum nisi efficitur vitae. Sed vel lobortis lorem. Cras sit amet odio posuere, consectetur massa id, euismod nisi. Vivamus nec enim felis. Nullam ut leo mi.

		Suspendisse potenti. Sed molestie quam nisi, nec consectetur lorem efficitur sed. Nam condimentum a augue sit amet facilisis. Vestibulum sagittis lectus nec magna elementum, ac finibus tortor consequat. Donec suscipit convallis enim vitae efficitur. Nulla elementum in elit ut faucibus. Quisque sit amet nulla nec nulla tincidunt fringilla. Integer bibendum cursus elit, non congue nibh condimentum placerat. In fringilla tristique diam. Curabitur laoreet lectus rutrum semper porttitor. Aliquam elementum est eu risus gravida lacinia.

		Phasellus id eleifend tortor, eu accumsan arcu. Vivamus urna urna, ultrices nec auctor et, rhoncus eget erat. Pellentesque bibendum nibh condimentum nibh sodales, vitae luctus augue pulvinar. Curabitur justo dolor, dictum congue erat id, semper fringilla metus. Pellentesque in scelerisque felis. Fusce vel erat nunc. Etiam porta ipsum sed imperdiet tristique. Sed congue rutrum enim, quis dapibus ante aliquet interdum. Mauris posuere ornare ultricies. Sed at tempor sapien, vel aliquam augue. Aliquam egestas mauris ac viverra placerat. Aenean ac eros volutpat, vehicula metus et, finibus dolor.

		Nulla aliquam purus lectus, non sollicitudin ipsum tempor at. Ut hendrerit lectus eu augue gravida, a pulvinar nisi pulvinar. Vivamus tristique pharetra tortor, accumsan condimentum ex pretium vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque diam purus, aliquet eget metus et, laoreet facilisis purus. Nam fermentum nisi tristique nisl vulputate efficitur. Ut euismod at eros ac volutpat. Cras mi odio, interdum ut felis id, lacinia auctor urna. In hac habitasse platea dictumst. Curabitur molestie, mauris sit amet aliquam molestie, ligula quam elementum tellus, id blandit risus nunc sit amet dolor. Pellentesque purus mi, luctus dignissim tortor ut, tristique eleifend mi. Integer ligula urna, pretium ullamcorper porttitor nec, gravida et ante. Aliquam rhoncus urna enim, nec gravida nisi bibendum a.

		Nulla vehicula lacus at nibh consectetur, ut interdum turpis ornare. Morbi enim diam, ornare sollicitudin sem eu, luctus dignissim eros. Praesent in aliquet sapien, et commodo ligula. Donec nisl tellus, sagittis eu ornare quis, semper sed leo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer in gravida massa, id imperdiet velit. Praesent in est suscipit, lobortis augue sed, feugiat ex. Pellentesque porttitor ligula facilisis arcu rhoncus rutrum. Nullam eget convallis ipsum. Quisque finibus sapien a nulla viverra accumsan. Duis lorem dolor, imperdiet non erat sed, cursus laoreet mauris. Suspendisse potenti. Vivamus tincidunt sagittis bibendum.

		Mauris interdum nisl ac lorem tempor, ac tristique lacus viverra. Donec sed est mi. Nunc mauris odio, dapibus vel massa a, faucibus convallis nisi. Duis tincidunt luctus dui.

		</article>
	</main>
</div>
<script src="themes.js"></script>
</body>
</html>
