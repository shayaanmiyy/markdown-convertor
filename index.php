<?php

require 'vendor\autoload.php';
require 'src\MarkdownConvertor.php';

use MarkdownConvertor\MarkdownConvertor;

$markdown = "# Hello, World!\nThis is a **Markdown** text.";
$markdown .= "# h1 Heading 8-)
## h2 Heading
### h3 Heading
#### h4 Heading
##### h5 Heading
###### h6 Heading
";
$convertor = new MarkdownConvertor();
$html = $convertor->convert($markdown);

echo $html;