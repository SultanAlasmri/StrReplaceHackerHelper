# Text Replacer Laravel Helper

## English

### Installation

To install this package, you can use Composer:

```bash
composer require your-vendor-name/text-replacer

use App\Helpers;

$text = "استبدل هذا {9*9} و 'sulg' بنص مختلف.";

$replacedText = str_replace_hacker_helper($text, 'النص البديل');

echo $replacedText;


# مساعد استبدال النصوص في Laravel

## التثبيت

لتثبيت هذه الحزمة، يمكنك استخدام Composer:

```bash
composer require your-vendor-name/text-replacer


use App\Helpers;

$text = "استبدل هذا {9*9} و 'sulg' بنص مختلف.";

$replacedText = str_replace_hacker_helper($text, 'النص البديل');

echo $replacedText;
