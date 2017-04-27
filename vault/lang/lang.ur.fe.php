<?php
/**
 * This file is a part of the phpMussel package, and can be downloaded for free
 * from {@link https://github.com/Maikuolan/phpMussel/ GitHub}.
 *
 * PHPMUSSEL COPYRIGHT 2013 AND BEYOND BY THE PHPMUSSEL TEAM.
 *
 * Authors:
 * @see PEOPLE.md
 *
 * License: GNU/GPLv2
 * @see LICENSE.txt
 *
 * This file: Urdu language data for the front-end (last modified: 2017.04.24).
 */

/** Prevents execution from outside of phpMussel. */
if (!defined('phpMussel')) {
    die('[phpMussel] This should not be accessed directly.');
}

$phpMussel['lang']['bNav_home_logout'] = '<a href="?">ہوم</a> | <a href="?phpmussel-page=logout">لاگ آوٹ</a>';
$phpMussel['lang']['bNav_logout'] = '<a href="?phpmussel-page=logout">لاگ آوٹ</a>';
$phpMussel['lang']['config_attack_specific_archive_file_extensions'] = 'تسلیم شدہ آرکائیو فائل ایکسٹنشن (شکل CSV ہے، صرف شامل کرنے یا ہٹانے چاہئے مسائل پائے جاتے ہیں جب، غیر ضروری طور پر ہٹانے کے جھوٹے مثبت غیر ضروری طور پر انہوں نے مزید کہا جبکہ آپ کو حملے کی مخصوص پتہ لگانے سے شامل کر رہے ہیں کیا بنیادی طور پر وائٹ لسٹ گے، ذخیرہ فائلوں کے لئے ظاہر کرنے کے لئے کی وجہ سے ہو سکتا ہے، احتیاط کے ساتھ نظر ثانیw یہ بھی نوٹ کریں کہ اس تاریخی دستاویز اور مواد کی سطح پر تجزیہ نہیں کیا جا سکتا کر سکتے ہیں پر کوئی اثر) ہے. فہرست، ڈیفالٹ میں ہے کے طور پر، نظام اور CMS کی اکثریت کے اس پار سب سے زیادہ عام طور پر استعمال والوں فارمیٹس کی فہرست، لیکن جان بوجھ ضروری جامع نہیں ہے.';
$phpMussel['lang']['config_attack_specific_block_control_characters'] = '(نیولائنز علاوہ) کسی بھی کنٹرول حروف پر مشتمل کسی بھی فائلوں کو مسدود کریں? (<code>[\x00-\x08\x0b\x0c\x0e\x1f\x7f]</code>) اگر تم ہو <em><strong>ONLY</strong></em> سادہ ٹیکسٹ اپ لوڈ کرنے، اس کے بعد آپ کے سسٹم کے لئے کچھ اضافی تحفظ فراہم کرنے پر آپ اس اختیار کو تبدیل کر سکتے ہیں. تاہم، اگر آپ کو سادہ متن کے علاوہ اور کچھ پر اس رخ جھوٹے مثبت نتیجے میں اپ لوڈ کریں. جھوٹی = مسدود نہ کریں [ڈیفالٹ]؛ سچا = بلاک.';
$phpMussel['lang']['config_attack_specific_chameleon_from_exe'] = 'نہ تو چلنے نہ ہی تسلیم کیا آرکائیوز ہیں کہ فائلوں میں اور چلنے جن ہیڈرز غلط ہیں کے لئے کارکردگی قابل ہیڈرز کے لئے تلاش کریں. جھوٹی = بند; سچے = پر.';
$phpMussel['lang']['config_attack_specific_chameleon_from_php'] = 'نہ تو پی ایچ پی فائلوں کو نہ پہچان لیا آرکائیوز ہیں کہ فائلوں میں پی ایچ پی ہیڈر لئے تلاش. جھوٹی = بند; سچے = پر.';
$phpMussel['lang']['config_attack_specific_chameleon_to_archive'] = 'Sآرکائیوز جن ہیڈرز غلط ہیں کے لئے earch (تائید: BZ، GZ، RAR، زپ، RAR، GZ). جھوٹی = بند; سچے = پر.';
$phpMussel['lang']['config_attack_specific_chameleon_to_doc'] = 'جن ہیڈرز غلط ہیں دفتر کی دستاویزات کے لئے تلاش کریں (تائید: DOC، ڈاٹ، پی پی ایس، PPT، XLA، XLS، جانکار). جھوٹی = بند; سچے = پر.';
$phpMussel['lang']['config_attack_specific_chameleon_to_img'] = 'جن ہیڈرز ہیں تصاویر کے لئے تلاش غلط (تائید: BMP، DIB، PNG، GIF، JPEG، JPG، XCF، PSD، PDD، WEBP). جھوٹی = بند; سچے = پر.';
$phpMussel['lang']['config_attack_specific_chameleon_to_pdf'] = 'پی ڈی ایف فائلوں جن ہیڈرز غلط ہیں کے لئے تلاش کریں. جھوٹی = بند; سچے = پر.';
$phpMussel['lang']['config_attack_specific_corrupted_exe'] = 'خراب فائلوں اور غلطیوں کا تجزیہ. جھوٹی = نظرانداز کریں. سچے = بلاک [ڈیفالٹ]. پتہ لگانے اور ممکنہ طور پر خراب PE (پورٹ ایبل نفاذ پذیر) فائلوں کو بلاک؟ اکثر ایسا ہوتا ہے (لیکن ہمیشہ نہیں)، ایک PE فائل کے کچھ پہلوؤں کو خراب کر رہے ہیں یا\ سکتے ٹی صحیح تجزیہ کیا جائے تو یہ ایک وائرل انفیکشن کا اشارہ ہو سکتا ہے. سب سے زیادہ اینٹی وائرس پروگراموں کی طرف سے استعمال کیا جاتا ہے عمل UN رہنے کے لئے ان کے وائرس اجازت کرنے کے لئے، کچھ طریقوں سے، ایک وائرس کے پروگرامر کے بارے میں معلوم ہو تو خاص طور پر روکنے کی کوشش کریں گے، جس میں ان فائلوں کی تصریف ضرورت ہوتی PE فائلوں میں وائرس کا پتہ لگانے کے پتہ لگایا.';
$phpMussel['lang']['config_attack_specific_decode_threshold'] = 'خام ڈیٹا جس کے اندر ڈیکوڈ کمانڈز کے پتہ جانی چاہئے کی لمبائی کے حد سے (کے معاملے میں کسی بھی نمایاں کارکردگی کے مسائل جبکہ سکیننگ سے ہیں). پہلے سے طے شدہ = 512KB. زیرو یا شہوت انگیز null قیمت (فائل کی بنیاد پر اس طرح کے کسی بھی حد کو ہٹانے کے) حد سے نااہل کیا.';
$phpMussel['lang']['config_attack_specific_scannable_threshold'] = 'کہ phpMussel پڑھیں اور سکین کرنے کی اجازت ہے خام ڈیٹا کی لمبائی کی حد (کے معاملے میں کوئی نمایاں کارکردگی کے مسائل جبکہ سکیننگ ہیں). پہلے سے طے شدہ = 32MB. زیرو یا خالی قدر حد سے غیر فعال. عام طور پر، اس کی قیمت آپ چاہتے ہیں اور filesize_limit ہدایت کے مقابلے میں زیادہ نہیں ہونا چاہئے، آپ کے سرور یا ویب سائٹ کو حاصل کرنے کی توقع ہے کہ فائل اپ لوڈ کی اوسط فائل سے کم نہیں ہونا چاہئے، اور میں سے ایک تقریبا سے زیادہ پانچویں نہیں ہونا چاہئے کل قابل اجازت میموری مختص "php.ini" ترتیب دینے کی فائل کے ذریعے PHP کے لئے عطا کی. یہ ہدایت بہت زیادہ میموری کا استعمال کرتے ہوئے کی طرف سے phpMussel کو روکنے کے لئے کوشش کرنے کے لئے موجود ہے (کہ کامیابی کی ایک مخصوص فائل کے اوپر فائلوں کو اسکین کرنے کے قابل ہونے سے روکنے کروں گا).';
$phpMussel['lang']['config_compatibility_ignore_upload_errors'] = 'جب تک یہ آپ کی مخصوص نظام پر phpMussel کا صحیح فعالیت کے لئے ضروری ہے یہ ہدایت عام طور پر غیر فعال کر دیا جائے چاہئے. عام طور پر، جب معذور، phpMussel میں عناصر کی موجودگی کا پتہ لگاتا ہے جب <code>$_FILES</code> array(), یہ phpMussel ایک غلطی پیغام واپس آ جائیں گے، ان عناصر کو خالی یا خالی ہو تو، فائلوں ان عناصر کی نمائندگی کرتے ہیں کی ایک اسکین شروع کرنے کی کوشش کرتے ہیں، اور کرے گا. یہ phpMussel لئے مناسب رویہ ہے. تاہم، کچھ CMS کے لئے، میں خالی عناصر <code>$_FILES</code> وہاں نہ کوئی بھی ہوتے ہیں تو اس صورت میں، phpMussel لئے عام رویہ ان لوگوں CMS کے عام رویے کے ساتھ مداخلت کی جائے گی رپورٹ کیا جا سکتا ہے ان لوگوں کے CMS، یا غلطیوں کے قدرتی رویے کے نتیجے میں ہو سکتا ہے. ایک ایسی صورتحال نے اس وقت ہوتی ہے، تو اس اختیار کو چالو کرنے کے، phpMussel طرح خالی عناصر کے لئے علیحدہ اسکین کی ضرورت شروع کرنے کی کوشش نہ کرنے کی ہدایت دیں گے، اس طرح کے صفحے کی درخواست کے تسلسل کی اجازت دی چلا جب ان کو نظر انداز اور کسی بھی متعلقہ خرابی کے پیغامات واپس نہیں کرنا. جھوٹی = بند; سچے = ON.';
$phpMussel['lang']['config_compatibility_only_allow_images'] = 'آپ کو صرف امید رکھتے ہیں یا صرف تصاویر آپ کے سسٹم یا CMS پر اپ لوڈ کرنے کی اجازت دینے کا ارادہ رکھتے ہیں، اور آپ بالکل دوسرے کسی بھی فائلوں کی ضرورت نہیں ہے اگر تصاویر آپ کے سسٹم یا CMS پر اپ لوڈ کیا جا کرنے کی بجائے، اس حکم فعال کیا جانا چاہئے، لیکن دوسری صورت میں ہونا چاہئے تو غیر فعال کر دیا. اس ہدایت، یہ\ چالو حالت میں ہے تو اندھا دھند ان کی سکیننگ کے بغیر، غیر تصویری فائلوں کے طور پر شناخت کی کوئی بھی اپ لوڈز کو بلاک کرنے phpMussel ہدایت کریں گے. یہ غیر تصویری فائلوں کی کوشش کی اپ لوڈ کے لئے پروسیسنگ کے وقت اور میموری استعمال کو کم کر سکتا. جھوٹی = بند; سچے = ON.';
$phpMussel['lang']['config_files_block_encrypted_archives'] = 'پتہ لگانے اور بلاک مرموز آرکائیوز؟ کیونکہ phpMussel مرموز ابلیھاگاروں کے مندرجات کو اسکین کرنے کے قابل نہیں ہے، یہ ممکن ہے کہ محفوظ شدہ دستاویزات خفیہ کاری phpMussel، اینٹی وائرس سکینر اور ایسی دیگر تحفظات کو نظرانداز کرنے کی کوشش کرنے کا ایک ذریعہ کے طور پر ایک حملہ آور کی طرف سے ملازم ہو جائے. یہ مرموز جائے کرنے کو پتہ چلتا ہے کہ کسی بھی تاریخی دستاویز کو بلاک کرنے phpMussel تربیت؛ ممکنہ طور پر یہ اس طرح کے امکانات کے ساتھ منسلک کسی بھی خطرے کو کم کرنے میں مدد کر سکتا ہے. جھوٹی = نہیں; سچے = ہاں [طے شدہ].';
$phpMussel['lang']['config_files_check_archives'] = 'ابلیھاگاروں کے مندرجات کی جانچ کرنا ttempt؟ جھوٹی = چیک نہ کریں؛ سچے = [ڈیفالٹ] چیک کریں. فی الحال، کی حمایت صرف محفوظ شدہ دستاویزات اور سمپیڑن فارمیٹس BZ / BZIP2، GZ / GZIP، LZF، PHAR، ٹار اور ZIP (محفوظ شدہ دستاویزات اور سمپیڑن فارمیٹس RAR، CAB، 7z اور وقت کی سہولت مہیا نہیں وغیرہ) حاصل ہے. یہ نقائص سے پاک نہیں ہے! میں انتہائی رکھتے ہوئے اس کو آن کیا تجویز کرتے ہوئے، میں یہ ہمیشہ سب کچھ مل جائے گا اس بات کی ضمانت نہیں دے سکتے. آرکائیو فی الحال چیکنگ PHARs یا زپ کے لئے پنراورتی نہیں ہے کہ اس کے علاوہ آگاہ رہیں.';
$phpMussel['lang']['config_files_filesize_archives'] = 'ابلیھاگاروں کے مندرجات کو فائل بلیک لسٹ / وہسلنگ لے؟ جھوٹی = نہیں (صرف بھوری رنگ کی فہرست میں سب کچھ); سچے = ہاں [طے شدہ].';
$phpMussel['lang']['config_files_filesize_limit'] = 'میں KB فائل کی حد. 65536 = 64MB [ڈیفالٹ]؛ 0 = کوئی حد نہیں (ہمیشہ سرمئی درج)، کسی بھی (مثبت) عددی قیمت قبول کر لیا. آپ پی ایچ پی کی ترتیب میموری ایک عمل کو پکڑ کر سکتے کے یا اگر رقم کو محدود کر دیتی ہے جب یہ مفید ہو سکتا اپ لوڈز آپ پی ایچ پی کی ترتیب حدود فائل.';
$phpMussel['lang']['config_files_filesize_response'] = 'فائل کی حد سے تجاوز ہے کہ (اگر موجود ہو) فائلوں کے ساتھ کیا کیا جائے. جھوٹی = وائٹ فہرست; سچے = بلیک لسٹ [طے شدہ].';
$phpMussel['lang']['config_files_filetype_archives'] = '/ستاویز کے مندرجات کو وہسلنگ قسم کی فائل بلیک لسٹ سے زائد کیری? False = کوئی (صرف بھوری رنگ کی فہرست میں سب کچھ) [طے شدہ]; سچے = جی ہاں.';
$phpMussel['lang']['config_files_filetype_blacklist'] = 'بلیک لسٹ:';
$phpMussel['lang']['config_files_filetype_greylist'] = 'گرے فہرست:';
$phpMussel['lang']['config_files_filetype_whitelist'] = 'آپ کے سسٹم کو اجازت دیتا ہے تو فائلوں کے مخصوص قسم کے اپ لوڈ کیا جا کرنے کے لئے، یا آپ کے سسٹم کو واضح طور پر، فائلوں کی بعض اقسام کی تردید کرتے ہیں وائٹ لسٹیں، بلیک لسٹ اور سرمئی فہرستوں میں ان قسم کی فائلوں کی وضاحت جس میں رفتار سکیننگ سکرپٹ زائد جائیں کرنے کی اجازت دے کر کیا جاتا ہے بڑھا سکتے ہیں تو بعض قسم کی فائلوں. ڈاک CSV (علامت سے علیحدہ اقدار) ہے. آپ کو سب کچھ، بلکہ وائٹ لسٹ، بلیک لسٹ یا بھوری رنگ کی فہرست کے مقابلے میں اسکین کرنے کے لئے چاہتے ہیں، متغیر (/ ے) خالی چھوڑ؛ ایسا کرنے سے وائٹ لسٹ / بلیک لسٹ / سرمئی فہرست کو غیر فعال کریں گے. پروسیسنگ کے منطقی حکم ہے: قسم کی فائل کو وائٹ لسٹ میں ہے، تو اسکین نہیں کرتے اور ڈان \'T بلاک فائل، اور بلیک لسٹ یا سرمئی فہرست خلاف کی فائل کو چیک نہیں کرتے. قسم کی فائل کو بلیک لسٹ کیا جاتا ہے تو، فائل کو اسکین نہیں لیکن بہرحال اس پر بلاک، اور سرمئی فہرست خلاف کی فائل کو چیک نہیں کرتے. بھوری رنگ کی لسٹ خالی ھے یا سرمئی لسٹ خالی نہیں ہے اور قسم کی فائل سرمئی مندرج ہے تو، عام طور پر فی فائل کو اسکین اور اسکین کے نتائج کی بنیاد پر اسے مسدود کرنا چاہے تعین، لیکن بھوری رنگ لسٹ خالی نہیں ہے تو اور تو قسم کی فائل کو بلیک لسٹ کے طور پر فائل کا علاج درج ہے نہ گرے، لہذا یہ سکیننگ لیکن ویسے یہ مسدود نہیں. وائٹ لسٹ:';
$phpMussel['lang']['config_files_max_recursion'] = 'ابلیھاگاروں کے لئے زیادہ سے زیادہ تکرار کی گہرائی کی حد. پہلے سے طے شدہ = 10.';
$phpMussel['lang']['config_files_max_uploads'] = 'فائلوں کی زیادہ سے زیادہ قابل اجازت تعداد میں فائلوں کو اپ لوڈ اسکین اسکین اسقاط اور صارف کو وہ ایک ہی بار میں بہت زیادہ اپ لوڈ کررہے ہیں مطلع کرنے سے پہلے دوران اسکین کرنے کے! ایک نظریاتی حملے ہیں جس کے تحت ایک حملہ آور ایک پیسنے رک PHP عمل کو سست کرنے phpMussel اوور لوڈنگ کی طرف سے آپ کے سسٹم یا CMS DDOS کرنے کی کوشش کے خلاف تحفظ فراہم کرتا ہے. تجویز کردہ: 10. آپ کو بڑھانے یا اس نمبر سے آپ ہارڈ ویئر کی رفتار پر منحصر ہے کو کم کر سکتے ہیں. کہ اس نمبر کے لئے اکاؤنٹ یا ابلیھاگاروں کے مندرجات شامل نہیں ہے یاد رکھیں کہ..';
$phpMussel['lang']['config_general_cleanup'] = 'ترتیب ختم متغیر اور کیشے ابتدائی اپ لوڈ سکیننگ کے بعد اسکرپٹ طرف سے استعمال کیا؟ جھوٹی = کوئی؛ سچے = جی ہاں [ڈیفالٹ]. آپ کے اپ لوڈز کے ابتدائی سکیننگ پرے سکرپٹ کا استعمال کرتے ہوئے not- -are تو، آپ کو اس <code> سچا </code> کے (ہاں) پر، میموری استعمال کو کم سے کم کرنے کے لئے مقرر کیا جانا چاہئے. آپ کے اپ لوڈز کے ابتدائی سکیننگ پرے سکرپٹ کا استعمال کرتے ہوئے -are- تو، پر سیٹ کرنا چاہئے <code>جھوٹے</code> (کوئی)، غیر ضروری طور پر میموری میں دہرے ڈیٹا دوبارہ لوڈ بچنے کے لئے. عام پریکٹس میں، یہ عام طور پر <code> صحیح پر سیٹ کیا جانا چاہئے</code>, لیکن، اگر آپ ایسا کرتے ہیں تو، آپ کو نہیں ابتدائی فائل اپ لوڈ کی سکیننگ کے علاوہ کسی اور چیز کے لئے سکرپٹ کو استعمال کرنے کے قابل ہو جائے گا. CLI موڈ میں کوئی اثر و رسوخ ہے.';
$phpMussel['lang']['config_general_delete_on_sight'] = 'Eفوری طور پر دستخط کے ذریعے یا دوسری صورت میں چاہے، الفاظ کے ملاپ کے کسی بھی پتہ لگانے کے معیار پر کسی بھی سکین کی کوشش کی فائل اپ لوڈ حذف کرنے کی کوشش کرنے کے لئے اس ہدایت nabling سکرپٹ ہدایت کرے گا. "صاف" ہونے کا تعین کیا فائلیں چھوا نہیں کیا جائے گا. ابلیھاگاروں کی صورت میں، پورے آرکائیو حذف کر دیا جائے گا قطع نظر یا نہیں آمیز فائل کا صرف ایک ہی محفوظ شدہ دستاویزات کے اندر موجود کئی فائلوں میں سے ہے. فائل اپ لوڈ کی سکیننگ کے معاملے کے طور پر، عام طور پر، یہ ضروری نہیں ہے، یہ ہدایت چالو کرنے کے لئے عام طور پر پی ایچ پی کی خود کار طریقے سے اس کی کیشے کے مندرجات مٹا دے گا کیونکہ عملدرآمد ختم ہو گیا ہے جب یہ عام طور پر سرور ہے جب تک کہ اس کے ذریعے اپ لوڈ کردہ کسی بھی فائلوں کو خارج کر دیں گے جس کا مطلب ہے، وہ منتقل کر دیا کاپی یا پہلے سے ہی خارج کر دیا گیا ہے. یہ ہدایت جن PHP کی کاپیاں ہمیشہ انداز کی توقع میں برتاؤ نہیں کر سکتے ہیں ان کے لئے سیکورٹی کی ایک اضافی اقدام کے طور پر یہاں شامل کی جاتی ہے. جھوٹی = سکیننگ کے بعد، اکیلے فائل [ڈیفالٹ] چھوڑ دیں؛ سچا = سکیننگ کے بعد، صاف نہیں ہے تو، فوری طور پر حذف.';
$phpMussel['lang']['config_general_disable_cli'] = 'CLI موڈ کو غیر فعال کریں؟ CLI موڈ ڈیفالٹ کی طرف سے چالو حالت میں ہے، لیکن کبھی کبھی بعض جانچ کے آلات (جیسے PHPUnit کے طور پر، مثال کے طور پر) اور دیگر CLI کی بنیاد پر ایپلی کیشنز کے ساتھ مداخلت کر سکتے ہیں. آپ CLI موڈ کو غیر فعال کرنے کی ضرورت نہیں ہے تو، آپ کو اس ہدایت کو نظر انداز کرنا چاہئے. جھوٹی = CLI موڈ [طے شدہ] فعال؛ سچا = غیر فعال CLI موڈ.';
$phpMussel['lang']['config_general_disable_frontend'] = 'سامنے کے آخر تک رسائی کو غیر فعال کریں؟ سامنے کے آخر میں رسائی phpMussel زیادہ انتظام بنا سکتے ہیں، لیکن یہ بھی بہت ہے، ایک زبردست حفاظتی خطرہ ہو سکتا ہے. یہ جب بھی ممکن ہو واپس کے آخر کے ذریعے phpMussel منظم کرنے کی سفارش کی جاتی ہے، لیکن سامنے کے آخر میں رسائی ممکن نہیں ہے جب کے لئے فراہم کی جاتی ہے. تمہیں اس کی ضرورت ہے جب تک کہ اس کو معذور رکھیں. جھوٹی = سامنے کے آخر میں رسائی کو فعال کریں؛ سچا = غیر فعال سامنے کے آخر میں رسائی [طے شدہ].';
$phpMussel['lang']['config_general_disable_webfonts'] = 'webfonts کے غیر فعال کریں؟ سچا = جی ہاں؛ جھوٹی = کوئی [طے شدہ].';
$phpMussel['lang']['config_general_enable_plugins'] = 'phpMussel پلگ ان کے لئے حمایت فعال کریں؟ جھوٹی = کوئی؛ سچا = جی ہاں [طے شدہ].';
$phpMussel['lang']['config_general_forbid_on_block'] = 'phpMussel فائل اپ بلاک کر کے پیغام کے ساتھ 403 ہیڈرز بھیجیں، یا کے ساتھ معمول کے 200 OK رہنا چاہیے؟ جھوٹی = نہیں (200)؛ سچا = جی ہاں (403) [طے شدہ].';
$phpMussel['lang']['config_general_FrontEndLog'] = 'سامنے کے آخر میں لاگ ان کوششوں لاگنگ کے لئے دائر. ایک فائل کا نام کی وضاحت کریں، یا غیر فعال کرنے کو خالی چھوڑ.';
$phpMussel['lang']['config_general_honeypot_mode'] = 'جب honeypot موڈ چالو حالت میں ہے، phpMussel ہر ایک فائل اپ لوڈ نظرانداز کرنے پر اس کے مقابلوں کہ قطع نظر یا نہیں فائل اپ لوڈ کی جارہی کسی بھی دستخط شامل ہیں، اور ان لوگوں کی کوشش کی فائل اپ لوڈ کی کوئی اصل سکیننگ یا تجزیہ اصل میں واقع ہو گا سے میل کھاتا ہے کی کوشش کرے گا. یہ فعالیت وائرس / میلویئر کی تحقیق کے مقاصد کے لئے phpMussel استعمال کرنا چاہتے ہیں ان لوگوں کے لئے مفید ہونا چاہئے، لیکن صارف کی طرف phpMussel کے مقصد کے استعمال کی اصل فائل اپ لوڈ کی سکیننگ کے لئے ہے اگر یہ نہ تو اس فعالیت کو چالو کرنے کی سفارش کی، اور نہ ہی استعمال کرنے کے لئے سفارش کی جاتی ہے honeypotting علاوہ دیگر مقاصد کے لئے شہد کے برتن فعالیت. بنیادی طور پر، اس اختیار کو غیر فعال ہے. جھوٹی = معذور [ڈیفالٹ]؛ سچا = فعال کردہ.';
$phpMussel['lang']['config_general_ipaddr'] = 'کہاں درخواستوں منسلک کرنے کے IP ایڈریس کو تلاش کرنے کے لئے؟ پہلے سے طے شدہ = REMOTE_ADDR (جیسا CloudFlare کے اور پسند کرتا ہے کے طور پر خدمات کے لئے مفید). انتباہ: ڈان \ کر رہے T تبدیلی اس الا یہ کہ آپ آپ کو \ کیا معلوم !';
$phpMussel['lang']['config_general_lang'] = 'phpMussel لئے پہلے سے طے شدہ زبان کی وضاحت.';
$phpMussel['lang']['config_general_max_login_attempts'] = 'لاگ ان کوششوں کی زیادہ سے زیادہ تعداد (سامنے کے آخر میں). پہلے سے طے شدہ = 5.';
$phpMussel['lang']['config_general_quarantine_key'] = 'phpMussel یہ آپ یہ کرنا چاہتا ہوں کچھ ہے تو، phpMussel والٹ کے اندر تنہائی میں پرچم لگایا کوشش کی فائل اپ لوڈ نظرانداز کرنے کے قابل ہے. صرف دل کی گہرائیوں سے کسی بھی پرچم لگایا کوشش کی فائل اپ لوڈ اس فعالیت کو غیر فعال کر چھوڑ دینا چاہئے تجزیہ کرنے میں کوئی دلچسپی کے بغیر ان کی ویب سائٹ یا ہوسٹنگ ماحول کی حفاظت کے لئے چاہتے ہیں کہ phpMussel کے آرام دہ اور پرسکون صارفین، لیکن میلویئر کی تحقیق کے لئے یا اسی طرح کے پرچم لگائے کوشش کی فائل اپ لوڈ کی مزید تجزیہ کرنے میں دلچسپی رکھتے کسی بھی صارفین ایسی چیزوں کو اس فعالیت کو چالو کرنا چاہئے. نشان زدہ کوشش کی فائل اپ لوڈ کی Quarantining کبھی کبھی بھی، جھوٹے مثبت ٹھیک کرنا میں مدد کر سکتے ہیں یہ اکثر آپ کے لئے اس وقت ہوتی ہے کہ کچھ ہے. سنگرودھ فعالیت کو غیر فعال کرنے کیلئے، بس <code> quarantine_key </code> کے ہدایت خالی چھوڑ دیں، یا یہ کہ ہدایت کے مندرجات کو مٹانے یہ پہلے سے خالی نہیں ہے. سنگرودھ فعالیت کو چالو کرنے کے لئے، ہدایت میں کچھ قیمت درج کریں. <code> quarantine_key </code> کے ممکنہ حملہ آوروں کی طرف سے اور سنگرودھ کے اندر اندر ذخیرہ کردہ ڈیٹا کی کسی بھی ممکنہ پھانسی کی روک تھام کا ایک ذریعہ کے طور پر استحصال کیا جا رہا ہے سے قرنطینہ فعالیت کی روک تھام کا ایک ذریعہ کے طور پر ضرورت سنگرودھ فعالیت کا ایک اہم حفاظتی خصوصیت ہے. <code> quarantine_key </code> کے آپ کے پاس ورڈ کے طور پر اسی انداز میں علاج کیا جانا چاہئے: اب بہتر ہے، اور مضبوطی سے اس کی حفاظت. بہترین اثر کے لیے، کے ساتھ مل کر میں استعمال کرتے ہیں <code>delete_on_sight</code>.';
$phpMussel['lang']['config_general_quarantine_max_filesize'] = 'فائلوں کی زیادہ سے زیادہ قابل اجازت فائل قرنطینہ جائے. متعین قدر سے بڑی فائلوں قرنطینہ نہیں رکھا جائے گا. یہ ہدایت کسی بھی ممکنہ حملہ آوروں کے ممکنہ طور پر اپنے ہوسٹنگ سروس پر رن ​​دور ڈیٹا کے استعمال کے باعث ناپسندیدہ اعداد و شمار کے ساتھ آپ کے سنگرودھ سیلاب کے لئے یہ زیادہ مشکل بنانے کا ایک ذریعہ کے طور پر اہم ہے. پہلے سے طے شدہ = 2MB.';
$phpMussel['lang']['config_general_quarantine_max_usage'] = 'زیادہ سے زیادہ میموری کا استعمال سنگرودھ کے لئے کی اجازت دی. سنگرودھ طرف سے استعمال کیا کل میموری اس قیمت تک پہنچ جاتا ہے تو، استعمال کیا کل میموری اب کوئی اس قیمت تک پہنچ جاتا ہے جب تک قدیم ترین قرنطینہ فائلوں کو خارج کر دیا جائے گا. یہ ہدایت کسی بھی ممکنہ حملہ آوروں کے ممکنہ طور پر اپنے ہوسٹنگ سروس پر رن ​​دور ڈیٹا کے استعمال کے باعث ناپسندیدہ اعداد و شمار کے ساتھ آپ کے سنگرودھ سیلاب کے لئے یہ زیادہ مشکل بنانے کا ایک ذریعہ کے طور پر اہم ہے. پہلے سے طے شدہ = 64MB.';
$phpMussel['lang']['config_general_scan_cache_expiry'] = 'کب تک phpMussel سکیننگ کے نتائج کیشے چاہئے؟ قیمت کے لئے سکیننگ کے نتائج کیشے سیکنڈ کی تعداد ہے. پہلے سے طے شدہ 21600 سیکنڈ (6 گھنٹے) ہے؛ 0 کی قدر سکیننگ کے نتائج کیشنگ کو غیر فعال کریں گے.';
$phpMussel['lang']['config_general_scan_kills'] = 'فائل کا نام مسل کو مسدود یا ہلاک کر کے اپ لوڈز کے تمام ریکارڈ لاگ ان کریں. ایک فائل کا نام کی وضاحت کریں، یا غیر فعال کرنے کو خالی چھوڑ.';
$phpMussel['lang']['config_general_scan_log'] = 'فائل کا نام مسل تمام سکیننگ نتائج کے لاگ ان کرنے کے لئے. ایک فائل کا نام کی وضاحت کریں، یا غیر فعال کرنے کو خالی چھوڑ.';
$phpMussel['lang']['config_general_scan_log_serialized'] = 'فائل کا نام مسل تمام سکیننگ کے نتائج کو (serialized فارمیٹ استعمال کرتے ہوئے) لاگ ان کریں. ایک فائل کا نام کی وضاحت کریں، یا غیر فعال کرنے کو خالی چھوڑ.';
$phpMussel['lang']['config_general_timeFormat'] = 'phpMussel کی طرف سے استعمال کی تاریخوں کا فارم. اضافی اختیارات درخواست پر شامل کیا جا سکتا ہے.';
$phpMussel['lang']['config_general_timeOffset'] = 'ٹائم زون منٹ میں آفسیٹ.';
$phpMussel['lang']['config_general_timezone'] = 'آپ کے ٹائم زون.';
$phpMussel['lang']['config_general_truncate'] = 'وہ ایک خاص سائز تک پہنچنے میں جب صاف لاگ مسلیں؟ ویلیو میں B/KB/MB/GB/TB زیادہ سے زیادہ سائز ہے. جب 0KB، وہ غیر معینہ مدت تک ترقی کر سکتا ہے (پہلے سے طے). نوٹ: واحد فائلوں پر لاگو ہوتا ہے! فائلیں اجتماعی غور نہیں کر رہے ہیں.';
$phpMussel['lang']['config_heuristic_threshold'] = 'فائلوں کی مشکوک اور ممکنہ طور پر بدنیتی پر مبنی خصوصیات کی شناخت کے لئے ارادہ کر رہے ہیں کہ phpMussel کے بعض دستخط خود میں بغیر اپ لوڈ کیا جا رہا ہے ان فائلوں بدنیتی پر مبنی ہونے کے طور پر خاص طور پر اپ لوڈ کیا جا رہا ہے کی شناخت ہیں. یہ "دہلیز" قدر phpMussel بتاتا ہے ان فائلوں درنساوناپورن کا جھنڈا لگا ہو رہے ہیں اس سے پہلے کیا فائلوں کی مشکوک اور ممکنہ طور پر بدنیتی پر مبنی خصوصیات کے زیادہ سے زیادہ کل وزن اپ لوڈ کیا جا رہا ہے کی اجازت ہے. اس تناظر میں وزن کی تعریف کی شناخت مشکوک اور ممکنہ طور پر بدنیتی پر مبنی خصوصیات کی کل تعداد ہے. بنیادی طور پر، اس کی قیمت 3. ایک کم قیمت عام طور پر جھوٹے مثبت کے ایک اعلی موجودگی کے نتیجے میں جائے کرنے کے لئے مقرر کیا جائے گا لیکن بدنیتی پر مبنی فائلوں کی ایک بڑی تعداد جھنڈا لگایا جا رہا ہے، ایک زیادہ قیمت عام طور پر جھوٹے مثبت کی ایک کم موجودگی لیکن ایک کے نتیجے میں جائے جبکہ بدنیتی پر مبنی فائلوں کی کم تعداد جھنڈا لگایا جا رہا ہے. یہ آپ کو اس سے متعلق دشواریاں پیش آ رہے ہیں \ جب تک کہ اس کا بنیادی میں اس قدر چھوڑنے کے لئے عام طور پر سب سے بہتر ہے.';
$phpMussel['lang']['config_signatures_Active'] = 'فعال دستخط کی فائلوں کی ایک فہرست، کوما سے ختم ہونے والی.';
$phpMussel['lang']['config_signatures_detect_adware'] = 'phpMussel ایڈویئر کا پتہ لگانے کے لئے دستخط تجزیہ کرنا چاہیے؟ جھوٹی = کوئی؛ سچا = جی ہاں [طے شدہ].';
$phpMussel['lang']['config_signatures_detect_deface'] = 'phpMussel defacements اور defacers کا پتہ لگانے کے لئے دستخط تجزیہ کرنا چاہیے؟ جھوٹی = کوئی؛ سچا = جی ہاں [طے شدہ].';
$phpMussel['lang']['config_signatures_detect_joke_hoax'] = 'phpMussel مذاق / چکما میلویئر / وائرس کا پتہ لگانے کے لئے دستخط تجزیہ کرنا چاہیے؟ جھوٹی = کوئی؛ سچا = جی ہاں [طے شدہ].';
$phpMussel['lang']['config_signatures_detect_packer_packed'] = 'phpMussel پیکرز اور پیک کے اعداد و شمار کا پتہ لگانے کے لئے دستخط تجزیہ کرنا چاہیے؟ جھوٹی = کوئی؛ سچا = جی ہاں [طے شدہ].';
$phpMussel['lang']['config_signatures_detect_pua_pup'] = 'phpMussel PUA/PUP کا پتہ لگانے کے لئے دستخط تجزیہ کرنا چاہیے؟ جھوٹی = کوئی؛ سچا = جی ہاں [طے شدہ].';
$phpMussel['lang']['config_signatures_detect_shell'] = 'phpMussel شیل اسکرپٹ کا پتہ لگانے کے لئے دستخط تجزیہ کرنا چاہیے؟ جھوٹی = کوئی؛ سچا = جی ہاں [طے شدہ].';
$phpMussel['lang']['config_signatures_fail_extensions_silently'] = 'رپورٹ phpMussel چاہئے جب توسیعات لاپتہ ہیں؟ تو <code>fail_extensions_silently</code> کے معذور، لاپتہ توسیعات سکیننگ پر اطلاع دی جائے گی، اور اگر <code>fail_extensions_silently</code> کے چالو حالت میں ہے، ملانے لاپتہ وہاں نہیں کسی بھی ہیں کہ سکیننگ ان فائلوں کے لئے رپورٹنگ کے ساتھ، نظر انداز کر دیا جائے گا مسائل. اس حکم کو غیر فعال ممکنہ طور پر آپ کی سیکورٹی میں اضافہ ہو سکتا ہے، بلکہ جھوٹے مثبت کا اضافہ کا باعث بن سکتا. جھوٹی = معذور؛ سچا = چالو کیا [طے شدہ].';
$phpMussel['lang']['config_signatures_fail_silently'] = 'جب دستخط فائلوں غائب یا خراب phpMussel رپورٹ چاہئے؟ تو <code>fail_silently</code> کے، معذور لاپتہ اور خراب فائلوں سکیننگ پر اطلاع دی جائے گی، اور اگر <code>fail_silently</code> کے لاپتہ، فعال ہے اور خراب فائلوں ان فائلوں کے لئے رپورٹنگ سکیننگ کے ساتھ، نظر انداز کر دیا جائے گا کہ کوئی مسئلہ نہیں ہیں. آپ گر کر تباہ یا اسی طرح کے مسائل کا سامنا کر رہے ہیں جب تک کہ یہ عام تنہا چھوڑ دیا جانا چاہئے. جھوٹی = معذور؛ سچا = چالو کیا [طے شدہ].';
$phpMussel['lang']['config_template_data_css_url'] = 'ڈیفالٹ تھیم کے لئے سانچے کی فائل اندرونی سی ایس ایس خصوصیات کا استعمال، جبکہ اپنی مرضی کے موضوعات کے لئے سانچے کی فائل، خارجی سی ایس ایس خصوصیات کا استعمال. ، اپنی مرضی کے موضوعات کے لئے سانچے کی فائل کو استعمال کرنے کی <code>css_url</code> کے متغیر کا استعمال کرتے ہوئے آپ کی اپنی مرضی کے موضوعات سی ایس ایس فائلوں کے عوامی HTTP ایڈریس کی وضاحت phpMussel ہدایت کرنے کے لئے. آپ کو اس متغیر خالی چھوڑ تو، phpMussel ڈیفالٹ تھیم کے لئے سانچے کی فائل کو استعمال کریں گے.';
$phpMussel['lang']['config_urlscanner_cache_time'] = 'کب تک (سیکنڈوں میں) API لک اپ کے نتائج کے لئے محفوظ ہو جائے چاہئے؟ پہلے سے طے شدہ 3600 سیکنڈ ہے (1 گھنٹہ).';
$phpMussel['lang']['config_urlscanner_google_api_key'] = 'ضروری API کلید وضاحت کی گئی ہے جب گوگل محفوظ براؤزنگ API کو API لک اپ کو فعال کرتا ہے.';
$phpMussel['lang']['config_urlscanner_lookup_hphosts'] = 'درست پر سیٹ ہونے hpHosts API کو API لک اپ کو فعال کرتا ہے.';
$phpMussel['lang']['config_urlscanner_maximum_api_lookups'] = 'انفرادی اسکین iteration کے مطابق انجام دینے کے لئے API لک اپ کی زیادہ سے زیادہ قابل اجازت تعداد. ہر اضافی API لک اپ ہر ایک اسکین تکرار مکمل کرنے کی ضرورت کل وقت کا اضافہ کریں گے، لہذا آپ کو مجموعی طور پر اسکین کے عمل کو تیز کرنے کے لئے ایک حد مقرر کر سکتے ہیں. 0 مقرر کرتے وقت، کوئی ایسی زیادہ سے زیادہ قابل اجازت تعداد میں لاگو کیا جائے گا. پہلے سے طے شدہ کی طرف سے 10 سیٹ کریں.';
$phpMussel['lang']['config_urlscanner_maximum_api_lookups_response'] = 'API لک اپ کی زیادہ سے زیادہ قابل اجازت تعداد سے تجاوز کر جاتا ہے تو کیا کیا جائے؟ جھوٹی = کچھ بھی نہیں (پروسیسنگ جاری رہے) [طے شدہ] ہو؛ سچا = فلیگ / فائل بلاک.';
$phpMussel['lang']['config_virustotal_vt_public_api_key'] = 'اختیاری، phpMussel وائرس، trojans، میلویئر اور دیگر خطرات کے خلاف تحفظ کی ایک بہت بڑھا سطح فراہم کرنے کے لئے ایک طریقہ کے طور پر وائرس کل API کا استعمال کرتے ہوئے فائلوں کو اسکین کرنے کے قابل ہے. بطور ڈیفالٹ، سکیننگ فائلوں وائرس کل API کا استعمال غیر فعال ہے. یہ فعال کرنے کیلئے، وائرس کل سے ایک API کلید درکار ہے. اہم فائدہ کی وجہ سے اس سے آپ کے لئے میں انتہائی چالو کرنے کی سفارش کرتے ہیں کہ، یہ \'ے کچھ فراہم کر سکتا ہے. براہ کرم آگاہ رہیں، تاہم، کہ وائرس کل API استعمال کرنے کے لئے، آپ <em><strong> پر ضروری ہے </strong></em> کو ان کے سروس کی شرائط سے اتفاق کرتا ہوں اور آپ <em><strong> پر ضروری ہے </strong></em> مطابق وائرس کل دستاویزات کی طرف سے بیان کو تمام ہدایات پر عمل! آپ پڑھیں اور وائرس کل اور اس API کے سروس کی شرائط سے اتفاق کرتا ہوں: آپ جب تک یہ انضمام خصوصیت کو استعمال کرنے کی اجازت نہیں ہے. تم نے پڑھا ہے اور آپ کو ایک کم از کم، سمجھنے، وائرس کل پبلک API دستاویزات کے (بعد "VirusTotal کی عوامی API V2.0" سب کچھ لیکن "فہرست" سے پہلے) تمہید.';
$phpMussel['lang']['config_virustotal_vt_quota_rate'] = 'وائرس کل API دستاویزات کے مطابق، "یہ کسی بھی 1 منٹ ٹائم فریم میں کسی بھی نوعیت کی زیادہ سے زیادہ 4 درخواستوں تک محدود ہے. آپ کو ایک honeyclient، honeypot یا اور نہ صرف VirusTotal کی کرنے کے لئے وسائل فراہم کرنے کے لئے کی جا رہی ہے کہ کسی دوسرے آٹومیشن چلاتے ہیں تو رپورٹیں آپ کو ایک اعلی کی درخواست کی شرح کوٹہ "کے حقدار ہیں بازیافت. بطور ڈیفالٹ، phpMussel سختی سے ان حدود پر عمل کرے گا، لیکن ان کی شرح کوٹہ کے امکان میں اضافہ کیا جا رہا ہے کی وجہ سے، ان دو ہدایات آپ اس پر کیا عمل کرنا چاہئے محدود کرنے کے طور phpMussel ہدایت کرنے کے لئے ایک وسیلہ کے طور پر فراہم کی جاتی ہیں. آپ \ جب تک، \'ایسا کرنے کی ہدایت کی گئی ہے، یہ ہے، آپ کو ان اقدار میں اضافہ کرنے کے لئے سفارش کی نہیں ہے، لیکن آپ کو \ تو\' آپ کی شرح کوٹہ پہنچنے سے متعلق سامنا کرنا پڑا مسائل کردینے گھٹ ان اقدار <em><strong> پر MAY </ مضبوط> </em> کو کبھی کبھی ان مسائل سے نمٹنے میں آپ کی مدد. آپ کی شرح کی حد <code> vt_quota_rate </code> کے کسی بھی <code> میں کسی بھی نوعیت کی درخواستوں vt_quota_time </code> کے لمحے وقت کی حد کے طور پر مقرر کیا جاتا ہے.';
$phpMussel['lang']['config_virustotal_vt_quota_time'] = '(مندرجہ بالا وضاحت ملاحظہ کریں).';
$phpMussel['lang']['config_virustotal_vt_suspicion_level'] = 'بطور ڈیفالٹ، phpMussel جس فائلوں کی یہ "مشکوک" سمجھتی ہے کہ ان فائلوں کو وائرس کل API کا استعمال کرتے ہوئے کو سکین کرتا ہے کو محدود کریں گے. آپ اختیاری <code> vt_suspicion_level </code> کے ہدایت کی قدر میں تبدیلی کرتے ہوئے اس پابندی کو ایڈجسٹ کر سکتے ہیں.';
$phpMussel['lang']['config_virustotal_vt_weighting'] = 'phpMussel detections کر کے طور پر یا پتہ لگانے weighting کے طور وائرس کل API کا استعمال کرتے ہوئے سکیننگ کے نتائج کو درخواست دینی چاہیے؟ (اور بدنیتی پر مبنی فائلوں کی ایک بڑی تعداد پکڑے جانے لہذا میں) ایک سے زیادہ کے انجن کو استعمال کرتے ہوئے (جیسا وائرس کل کرتا ہے) ایک فائل کو سکین ایک اضافہ کا پتہ لگانے کی شرح کے نتیجے چاہئے، اگرچہ، یہ بھی جھوٹے کی زیادہ تعداد کے نتیجے کر سکتے ہیں، کیونکہ یہ ہدایت موجود ہے، مثبت ہے، اور اس وجہ سے، کچھ حالات میں، سکیننگ کے نتائج بہتر ایک حتمی نتیجے پر اس اعتماد کا سکور کے طور پر کی بجائے استعمال کیا جا سکتا ہے. 0 کی قدر استعمال کیا جاتا ہے تو، وائرس کل API کا استعمال کرتے ہوئے سکیننگ کے نتائج کسی بھی انجن وائرس کل پرچم فائل کو بدنیتی پر مبنی ہونے کے طور پر سکین کیا جا رہا ہے کی طرف سے استعمال کیا جاتا ہے تو، detections کر کے طور پر لاگو کیا جائے گا، اور اس وجہ سے، phpMussel بدنیتی پر مبنی ہونے کے لئے فائل پر غور کریں گے . کسی دوسرے کی قدر استعمال کیا جاتا ہے تو، وائرس کل API کا استعمال کرتے ہوئے سکیننگ کے نتائج کا پتہ لگانے weighting کے طور پر لاگو کیا جائے گا، اور اس وجہ سے، فائل پرچم کہ وائرس کل کی طرف سے استعمال کے انجن کی تعداد سکین کیا جا رہا ہے درنساوناپورن ہونے (ایک اعتماد سکور کے طور پر کام کرے گا کے طور پر یا پتہ لگانے weighting کے) کے لئے ہے یا نہیں کی فائل کو سکین کیا جا رہا phpMussel طرف بدنیتی پر مبنی سمجھا جانا چاہئے (استعمال کیا کم از کم اعتماد کی نمائندگی کریں گے ویلیو سکور یا ترتیب میں کی ضرورت وزن بدنیتی پر مبنی سمجھا جائے). 0 کی قدر سے طے شدہ کی طرف سے استعمال کیا جاتا ہے.';
$phpMussel['lang']['field_activate'] = 'فعال کریں';
$phpMussel['lang']['field_component'] = 'اجزاء';
$phpMussel['lang']['field_create_new_account'] = 'نیا اکاؤنٹ بنانے';
$phpMussel['lang']['field_deactivate'] = 'بے عمل';
$phpMussel['lang']['field_delete_account'] = 'کھاتہ مٹا دو';
$phpMussel['lang']['field_delete_file'] = 'حذف کریں';
$phpMussel['lang']['field_download_file'] = 'نیچے بوجھ';
$phpMussel['lang']['field_edit_file'] = 'میں ترمیم کریں';
$phpMussel['lang']['field_file'] = 'فائل';
$phpMussel['lang']['field_filename'] = 'فائل کا نام: ';
$phpMussel['lang']['field_filetype_directory'] = 'ڈائریکٹری';
$phpMussel['lang']['field_filetype_info'] = '{EXT} فائل';
$phpMussel['lang']['field_filetype_unknown'] = 'نامعلوم';
$phpMussel['lang']['field_install'] = 'انسٹال کریں';
$phpMussel['lang']['field_latest_version'] = 'تازہ ترین ورژن';
$phpMussel['lang']['field_log_in'] = 'لاگ ان';
$phpMussel['lang']['field_more_fields'] = 'مزید قطعات';
$phpMussel['lang']['field_new_name'] = 'نیا نام:';
$phpMussel['lang']['field_ok'] = 'ٹھیک ہے';
$phpMussel['lang']['field_options'] = 'اختیارات';
$phpMussel['lang']['field_password'] = 'پاس ورڈ';
$phpMussel['lang']['field_permissions'] = 'اجازتیں';
$phpMussel['lang']['field_rename_file'] = 'نام تبدیل کریں';
$phpMussel['lang']['field_reset'] = 'پھر سیٹ کریں';
$phpMussel['lang']['field_set_new_password'] = 'نیا پاس ورڈ مقرر';
$phpMussel['lang']['field_size'] = 'کل سائز: ';
$phpMussel['lang']['field_size_bytes'] = 'بائٹس';
$phpMussel['lang']['field_size_GB'] = 'GB';
$phpMussel['lang']['field_size_KB'] = 'KB';
$phpMussel['lang']['field_size_MB'] = 'MB';
$phpMussel['lang']['field_size_TB'] = 'TB';
$phpMussel['lang']['field_status'] = 'سٹیٹس';
$phpMussel['lang']['field_system_timezone'] = 'نظام کو پہلے سے طے شدہ ٹائم زون کا استعمال کریں.';
$phpMussel['lang']['field_uninstall'] = 'غیر انسٹال';
$phpMussel['lang']['field_update'] = 'اپ ڈیٹ';
$phpMussel['lang']['field_update_all'] = 'تمام تجدید کریں';
$phpMussel['lang']['field_upload_file'] = 'نئی فائل اپ لوڈ کریں';
$phpMussel['lang']['field_username'] = 'صارف کا نام';
$phpMussel['lang']['field_your_version'] = 'آپ کے ورژن';
$phpMussel['lang']['header_login'] = 'جاری رکھنے کے لیے لاگ ان کریں.';
$phpMussel['lang']['label_os'] = 'آپریٹنگ سسٹم استعمال کیا:';
$phpMussel['lang']['label_php'] = 'PHP ورژن استعمال کیا:';
$phpMussel['lang']['label_phpmussel'] = 'phpMussel ورژن استعمال کیا:';
$phpMussel['lang']['label_sapi'] = 'SAPI استعمال کیا:';
$phpMussel['lang']['label_sysinfo'] = 'سسٹم کی معلومات:';
$phpMussel['lang']['link_accounts'] = 'اکاؤنٹس';
$phpMussel['lang']['link_config'] = 'کنفگریشن';
$phpMussel['lang']['link_documentation'] = 'دستاویزی';
$phpMussel['lang']['link_file_manager'] = 'فائل منیجر';
$phpMussel['lang']['link_home'] = 'ہوم';
$phpMussel['lang']['link_logs'] = 'لاگز';
$phpMussel['lang']['link_updates'] = 'تازہ ترین معلومات کے';
$phpMussel['lang']['link_upload_test'] = 'اپ لوڈ کریں ٹیسٹ';
$phpMussel['lang']['logs_logfile_doesnt_exist'] = 'منتخب شدہ لاگ فائل موجود نہیں ہے!';
$phpMussel['lang']['logs_no_logfiles_available'] = 'کوئی لاگ مسلیں دستیاب.';
$phpMussel['lang']['logs_no_logfile_selected'] = 'کوئی لاگ فائل کو منتخب کیا.';
$phpMussel['lang']['max_login_attempts_exceeded'] = 'لاگ ان کوششوں کی زیادہ سے زیادہ تعداد سے تجاوز کر گئی. رسائی مسترد کر دی.';
$phpMussel['lang']['previewer_days'] = 'دن';
$phpMussel['lang']['previewer_hours'] = 'گھنٹے';
$phpMussel['lang']['previewer_minutes'] = 'منٹس';
$phpMussel['lang']['previewer_months'] = 'مہینے';
$phpMussel['lang']['previewer_seconds'] = 'سیکنڈ';
$phpMussel['lang']['previewer_weeks'] = 'ہفتے';
$phpMussel['lang']['previewer_years'] = 'سال';
$phpMussel['lang']['response_accounts_already_exists'] = 'وہ صارف نام کے ساتھ ایک اکاؤنٹ پہلے سے موجود ہے!';
$phpMussel['lang']['response_accounts_created'] = 'اکاؤنٹ کامیابی سے تشکیل!';
$phpMussel['lang']['response_accounts_deleted'] = 'اکاؤنٹ کامیابی سے خارج!';
$phpMussel['lang']['response_accounts_doesnt_exist'] = 'اس اکاؤنٹ کا کوئی وجود نہیں.';
$phpMussel['lang']['response_accounts_password_updated'] = 'پاس ورڈ کامیابی سے اپ ڈیٹ!';
$phpMussel['lang']['response_activated'] = 'کامیابی کے ساتھ فعال.';
$phpMussel['lang']['response_activation_failed'] = 'چالو کرنے میں ناکام!';
$phpMussel['lang']['response_component_successfully_installed'] = 'اجزاء کامیابی سے نصب.';
$phpMussel['lang']['response_component_successfully_uninstalled'] = 'اجزاء کامیابی سے ان انسٹال.';
$phpMussel['lang']['response_component_successfully_updated'] = 'اجزاء کامیابی سے اپ ڈیٹ.';
$phpMussel['lang']['response_component_uninstall_error'] = 'جزو انسٹال کرنے کی کوشش کرتے ہوئے ایک خرابی واقع ہوئی.';
$phpMussel['lang']['response_component_update_error'] = 'جزو کو اپ ڈیٹ کرنے کی کوشش کرتے ہوئے ایک خرابی واقع ہوئی.';
$phpMussel['lang']['response_configuration_updated'] = 'کنفگریشن کامیابی سے اپ ڈیٹ.';
$phpMussel['lang']['response_deactivated'] = 'کامیابی کے ساتھ غیر فعال.';
$phpMussel['lang']['response_deactivation_failed'] = 'غیر فعال کرنے میں ناکام ہو گیا!';
$phpMussel['lang']['response_delete_error'] = 'حذف کرنے میں ناکام!';
$phpMussel['lang']['response_directory_deleted'] = 'ڈائریکٹری کامیابی سے خارج!';
$phpMussel['lang']['response_directory_renamed'] = 'ڈائریکٹری کامیابی سے نام تبدیل کر دیا!';
$phpMussel['lang']['response_error'] = 'خرابی';
$phpMussel['lang']['response_file_deleted'] = 'کامیابی خارج کر دیا فائل!';
$phpMussel['lang']['response_file_edited'] = 'کامیابی نظر ثانی شدہ فائل!';
$phpMussel['lang']['response_file_renamed'] = 'کامیابی کا نام دے دیا فائل!';
$phpMussel['lang']['response_file_uploaded'] = 'کامیابی اپ لوڈ کردہ فائل!';
$phpMussel['lang']['response_login_invalid_password'] = 'لاگ ان ناکامی! غلط پاسورڈ!';
$phpMussel['lang']['response_login_invalid_username'] = 'لاگ ان ناکامی! صارف کا نام موجود نہیں ہے!';
$phpMussel['lang']['response_login_password_field_empty'] = 'پاس ورڈ میدان خالی!';
$phpMussel['lang']['response_login_username_field_empty'] = 'صارف کا نام فیلڈ کو خالی!';
$phpMussel['lang']['response_rename_error'] = 'نام تبدیل کرنے میں ناکام!';
$phpMussel['lang']['response_updates_already_up_to_date'] = 'پہلے سے اپ ڈیٹ.';
$phpMussel['lang']['response_updates_not_installed'] = 'اجزاء انسٹال نہیں!';
$phpMussel['lang']['response_updates_not_installed_php'] = 'اجزاء انسٹال نہیں (PHP ضرورت ہوتی {V})!';
$phpMussel['lang']['response_updates_outdated'] = 'فرسودہ!';
$phpMussel['lang']['response_updates_outdated_manually'] = 'فرسودہ (دستی طور پر اپ ڈیٹ کریں)!';
$phpMussel['lang']['response_updates_outdated_php_version'] = 'فرسودہ (درکار PHP {V})!';
$phpMussel['lang']['response_updates_unable_to_determine'] = 'اس بات کا تعین کرنے سے قاصر ہے.';
$phpMussel['lang']['response_upload_error'] = 'اپ لوڈ کرنے میں ناکام ہو گیا!';
$phpMussel['lang']['state_complete_access'] = 'مکمل رسائی';
$phpMussel['lang']['state_component_is_active'] = 'جزو فعال ہے.';
$phpMussel['lang']['state_component_is_inactive'] = 'اجزاء غیر فعال ہے.';
$phpMussel['lang']['state_component_is_provisional'] = 'اجزاء عارضی ہے.';
$phpMussel['lang']['state_default_password'] = 'انتباہ: ڈیفالٹ پاس ورڈ کو استعمال کرتے ہوئے!';
$phpMussel['lang']['state_logged_in'] = 'لاگ ان.';
$phpMussel['lang']['state_logs_access_only'] = 'لاگز صرف رسائی';
$phpMussel['lang']['state_password_not_valid'] = 'انتباہ: یہ اکاؤنٹ ایک درست پاس ورڈ کا استعمال نہیں کر رہا ہے!';
$phpMussel['lang']['switch-hide-non-outdated-set-false'] = 'غیر فرسودہ مت چھپاو';
$phpMussel['lang']['switch-hide-non-outdated-set-true'] = 'غیر فرسودہ چھپائیں';
$phpMussel['lang']['switch-hide-unused-set-false'] = 'غیر استعمال شدہ مت چھپاو';
$phpMussel['lang']['switch-hide-unused-set-true'] = 'غیر استعمال شدہ چھپائیں';
$phpMussel['lang']['tip_accounts'] = 'ہیلو، {username}.<br />اکاؤنٹس صفحہ آپ phpMussel سامنے کے آخر تک رسائی حاصل کر سکتے ہیں جو کنٹرول کرنے کی اجازت دیتا ہے.';
$phpMussel['lang']['tip_config'] = 'ہیلو، {username}.<br />ترتیب کے صفحے آپ کو سامنے کے آخر میں سے phpMussel لئے ترتیب میں ترمیم کی اجازت دیتا ہے.';
$phpMussel['lang']['tip_donate'] = 'phpMussel is offered free of charge, but if you want to donate to the project, you can do so by clicking the donate button.';
$phpMussel['lang']['tip_file_manager'] = 'ہیلو، {username}.<br />فائل مینیجر آپ کو، کو حذف ترمیم کریں، اپ لوڈ، اور فائلوں کو ڈاؤن لوڈ کرنے کی اجازت دیتا ہے. احتیاط کے ساتھ استعمال کریں (آپ کو اس کے ساتھ آپ کی تنصیب توڑ سکتا ہے).';
$phpMussel['lang']['tip_home'] = 'ہیلو، {username}.<br />یہ phpMussel سامنے کے آخر میں کے ہوم پیج ہے. جاری رکھنے کے لئے بائیں طرف نیویگیشن مینو میں سے ایک لنک کو منتخب کریں.';
$phpMussel['lang']['tip_login'] = 'پہلے سے طے شدہ صارف نام: <span class="txtRd">admin</span> – ڈیفالٹ پاس ورڈ: <span class="txtRd">password</span>';
$phpMussel['lang']['tip_logs'] = 'ہیلو، {username}.<br />کہ لاگ فائل کے مواد کو دیکھنے کے لئے ذیل کی فہرست سے ایک لاگ فائل منتخب کریں.';
$phpMussel['lang']['tip_see_the_documentation'] = 'ملاحظہ کریں <a href="https://github.com/Maikuolan/phpMussel/blob/master/_docs/readme.en.md#SECTION7">documentation</a> مختلف ترتیب ہدایات اور ان کے مقاصد کے بارے میں معلومات کے لئے.';
$phpMussel['lang']['tip_updates'] = 'ہیلو، {username}.<br />اپ ڈیٹس صفحہ آپ کو انسٹال کرنے کے لئے، انسٹال کی اجازت دیتا ہے، اور phpMussel (بنیادی پیکج، دستخط، پلگ ان، L10N فائلوں، وغیرہ) کے مختلف اجزاء کو اپ ڈیٹ.';
$phpMussel['lang']['tip_upload_test'] = 'ہیلو، {username}.<br />اسے اپ لوڈ کرنے کی کوشش کریں جب آپ کو ٹیسٹ کرنے کے لئے چاہے ایک فائل عام طور phpMussel کی طرف سے بلاک کیا جائے گا کی اجازت دی اپ لوڈ ٹیسٹ کے صفحے پر ایک معیاری فائل اپ فارم پر مشتمل ہے.';
$phpMussel['lang']['title_accounts'] = 'phpMussel – اکاؤنٹس';
$phpMussel['lang']['title_config'] = 'phpMussel – کنفگریشن';
$phpMussel['lang']['title_file_manager'] = 'phpMussel – فائل مینیجر';
$phpMussel['lang']['title_home'] = 'phpMussel – ہوم';
$phpMussel['lang']['title_login'] = 'phpMussel – لاگ ان';
$phpMussel['lang']['title_logs'] = 'phpMussel – لاگز';
$phpMussel['lang']['title_updates'] = 'phpMussel – تازہ ترین معلومات کے';
$phpMussel['lang']['title_upload_test'] = 'phpMussel – اپ لوڈ کریں ٹیسٹ';

$phpMussel['lang']['info_some_useful_links'] = 'کچھ مفید لنکس:<ul>
            <li><a href="https://github.com/Maikuolan/phpMussel/issues">phpMussel Issues @ GitHub</a> – phpMussel لئے مسائل کا صفحہ (کی حمایت، مدد، وغیرہ).</li>
            <li><a href="http://www.spambotsecurity.com/forum/viewforum.php?f=55">phpMussel @ Spambot سلامتی کے لئے – phpMussel لئے فورم (کی حمایت، مدد، وغیرہ).</li>
            <li><a href="https://sourceforge.net/projects/phpmussel/">phpMussel @ SourceForge</a> – متبادل ڈاؤن آئینے phpMussel لئے.</li>
            <li><a href="https://websectools.com/">WebSecTools.com</a> – ویب سائٹس کو محفوظ بنانے کے لئے سادہ ویب ماسٹر ٹولز کا ایک مجموعہ.</li>
            <li><a href="http://www.clamav.net/">ClamavNet</a> – ClamAV مرکزی صفحہ (ClamAV® ٹروجن، وائرس، مالویئر اور کا پتہ لگانے کے لئے ایک اوپن سورس ینٹیوائرس انجن ہے دیگر درنساوناپورن خطرات).</li>
            <li><a href="https://www.securiteinfo.com/">SecuriteInfo.com</a> – کمپیوٹر سیکورٹی کمپنی ClamAV کے ضمنی دستخط فراہم کرتا ہے.</li>
            <li><a href="http://www.phishtank.com/">PhishTank</a> – جعل سازی ڈیٹا بیس phpMussel URL سکینر کی طرف سے استعمال کیا.</li>
            <li><a href="https://www.facebook.com/groups/2204685680/">International PHP Group @ Facebook</a> – پی ایچ پی سیکھنے کے وسائل اور بحث.</li>
            <li><a href="https://wwphp-fb.github.io/">International PHP Group @ GitHub</a> – پی ایچ پی سیکھنے کے وسائل اور بحث.</li>
            <li><a href="https://www.virustotal.com/">VirusTotal</a> – VirusTotal کی مشکوک فائلوں اور یو آر ایل کا تجزیہ کرنے کے لئے ایک مفت سروس ہے.</li>
            <li><a href="https://www.hybrid-analysis.com/">Hybrid Analysis</a> – ہائبرڈ تجزیہ کی طرف سے فراہم کردہ ایک مفت میلویئر تجزیہ خدمت ہے <a href="http://www.payload-security.com/">پیلوڈ سیکورٹی</a>.</li>
            <li><a href="https://www.malwarebytes.com/">Malwarebytes</a> – کمپیوٹر مخالف میلویئر ماہرین.</li>
            <li><a href="https://malwaretips.com/">MalwareTips</a> – مفید میلویئر مرکوز مباحثے فورمس.</li>
        </ul>';