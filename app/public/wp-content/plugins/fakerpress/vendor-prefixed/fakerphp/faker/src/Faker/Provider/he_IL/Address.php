<?php

namespace FakerPress\ThirdParty\Faker\Provider\he_IL;

class Address extends \FakerPress\ThirdParty\Faker\Provider\Address
{
    protected static $buildingNumber = ['%', '%#', '%##'];
    protected static $streetSuffix = [
        'רחוב', 'שדרות', 'סמטאת',
    ];
    protected static $postcode = ['#####', '#######'];

    /**
     * {@link} https://data.gov.il/dataset/322
     */
    protected static $citySuffix = [
        'אבו תלול', 'אבטין', 'אבטליון', 'אביאל', 'אביבים', 'אביגדור', 'אביחיל', 'אביטל', 'אביעזר', 'אבירים', 'אבן יהודה', 'אבן מנחם', 'אבן ספיר', 'אבן שמואל', 'אבני איתן', 'אבני חפץ', 'אבנת', 'אבשלום',
        'אדורה', 'אדירים', 'אדמית', 'אדרת', 'אודים', 'אודם', 'אוהד', 'אום אל-פחם', 'אום אל-קוטוף', 'אום בטין', 'אומן', 'אומץ', 'אופקים', 'אור הגנוז', 'אור הנר', 'אור יהודה', 'אור עקיבא', 'אורה', 'אורות', 'אורטל',
        'אורים', 'אורנים', 'אורנית', 'אושה', 'אזור', 'אחווה', 'אחוזם', 'אחוזת ברק', 'אחיהוד', 'אחיטוב', 'אחיסמך', 'אחיעזר', 'איבים', 'אייל', 'איילת השחר', 'אילון', 'אילות', 'אילניה', 'אילת', 'אירוס', 'איתמר',
        'איתן', 'איתנים', 'אכסאל', 'אל סייד', 'אלומה', 'אלומות', 'אלון הגליל', 'אלון מורה', 'אלון שבות', 'אלוני אבא', 'אלוני הבשן', 'אלוני יצחק', 'אלונים', 'אליאב', 'אליכין', 'אלי-עד', 'אליפז', 'אליפלט', 'אליקים',
        'אלישיב', 'אלישמע', 'אלמגור', 'אלמוג', 'אלעד', 'אל-עזי', 'אלעזר', 'אל-עריאן', 'אלפי מנשה', 'אלקוש', 'אלקנה', 'אל-רום', 'אמונים', 'אמירים', 'אמנון', 'אמציה', 'אניעם', 'אספר', 'אעבלין', 'אפיק', 'אפיקים',
        'אפק', 'אפרת', 'ארבל', 'ארגמן', 'ארז', 'אריאל', 'ארסוף', 'אשבול', 'אשבל', 'אשדוד', 'אשחר', 'אשכולות', 'אשל הנשיא', 'אשלים', 'אשקלון', 'אשרת', 'אשתאול', 'אתגר', 'באקה אל-גרביה', 'באר אורה', 'באר גנים',
        'באר טוביה', 'באר יעקב', 'באר מילכה', 'באר שבע', 'בארות יצחק', 'בארותיים', 'בארי', 'בוסתן הגליל', 'בוקעאתא', 'בורגתה', 'בחן', 'בטחה', 'ביצרון', 'ביר אל-מכסור', 'ביריה', 'בית אורן', 'בית אל', 'בית אלעזרי',
        'בית אלפא', 'בית אריה', 'בית ברל', 'בית גוברין', 'בית גמליאל', 'בית דגן', 'בית הגדי', 'בית הלוי', 'בית הלל', 'בית העמק', 'בית הערבה', 'בית השיטה', 'בית זיד', 'בית זית', 'בית זרע', 'בית חורון', 'בית חירות',
        'בית חלקיה', 'בית חנן', 'בית חנניה', 'בית חשמונאי', 'בית יהושע', 'בית יוסף', 'בית ינאי', 'בית יצחק-שער חפר', 'בית לחם הגלילית', 'בית מאיר', 'בית נחמיה', 'בית ניר', 'בית נקופה', 'בית עובד', 'בית עוזיאל',
        'בית עזרא', 'בית עריף', 'בית צבי', 'בית קמה', 'בית קשת', 'בית רבן', 'בית רימון', 'בית שאן', 'בית שמש', 'בית שערים', 'בית שקמה', 'ביתן אהרן', 'ביתר עילית', 'בלפוריה', 'בן זכאי', 'בן עמי', 'בני ברק',
        'בני דקלים', 'בני דרום', 'בני דרור', 'בני יהודה', 'בני נצרים', 'בני עטרות', 'בני עי"ש', 'בני ציון', 'בני ראם', 'בניה', 'בנימינה-גבעת עדה', 'בסמ"ה', 'בסמת טבעון', 'בענה', 'בצרה', 'בצת', 'בקוע', 'בקעות',
        'בר גיורא', 'בר יוחאי', 'ברוכין', 'ברור חיל', 'ברוש', 'ברכה', 'ברכיה', 'ברעם', 'ברק', 'ברקאי', 'ברקן', 'ברקת', 'בת הדר', 'בת חן', 'בת חפר', 'בת חצור', 'בת ים', 'בת עין', 'בת שלמה', 'גאולי תימן', 'גאולים',
        'גאליה', 'גבולות', 'גבים', 'גבע', 'גבע בנימין', 'גבע כרמל', 'גבעולים', 'גבעון החדשה', 'גבעות בר', 'גבעת אבני', 'גבעת אלה', 'גבעת ברנר', 'גבעת השלושה', 'גבעת זאב', 'גבעת ח"ן', 'גבעת יואב', 'גבעת יערים',
        'גבעת ישעיהו', 'גבעת כ"ח', 'גבעת ניל"י', 'גבעת עוז', 'גבעת שמואל', 'גבעת שמש', 'גבעת שפירא', 'גבעתי', 'גבעתיים', 'גברעם', 'גבת', 'גדות', 'גונן', 'גורן', 'גורנות הגליל', 'גזית', 'גזר', 'גיאה', 'גיבתון',
        'גיזו', 'גילון', 'גילת', 'גינוסר', 'גיניגר', 'גינתון', 'גיתה', 'גיתית', 'גלאון', 'גלגל', 'גליל ים', 'גמזו', 'גן הדרום', 'גן השומרון', 'גן חיים', 'גן יאשיה', 'גן יבנה', 'גן נר', 'גן שורק', 'גן שלמה',
        'גן שמואל', 'גנות', 'גנות הדר', 'גני הדר', 'גני טל', 'גני יוחנן', 'גני מודיעין', 'גני עם', 'גני תקווה', 'געש', 'געתון', 'גפן', 'גרופית', 'גשור', 'גשר', 'גשר הזיו', 'דאלית אל-כרמל', 'דבורה', 'דבוריה',
        'דבירה', 'דברת', 'דגניה א', 'דולב', 'דור', 'דורות', 'דחי', 'דייר אל-אסד', 'דייר חנא', 'דייר ראפאת', 'דימונה', 'דישון', 'דליה', 'דלתון', 'דמיידה', 'דן', 'דפנה', 'דקל', 'האון', 'הבונים', 'הגושרים', 'הדר עם',
        'הוד השרון', 'הודיה', 'הודיות', 'הושעיה', 'הזורע', 'הזורעים', 'החותרים', 'היוגב', 'הילה', 'המעפיל', 'הסוללים', 'העוגן', 'הר אדר', 'הר גילה', 'הר עמשא', 'הראל', 'הרדוף', 'הרצליה', 'הררית', 'ורד יריחו',
        'ורדון', 'זבדיאל', 'זוהר', 'זיקים', 'זיתן', 'זכרון יעקב', 'זכריה', 'זמר', 'זמרת', 'זנוח', 'זרועה', 'זרזיר', 'זרחיה', 'חבצלת השרון', 'חבר', 'חברון', 'חגור', 'חגי', 'חגלה', 'חדיד', 'חד-נס', 'חדרה', 'חולדה',
        'חולון', 'חולית', 'חולתה', 'חוסן', 'חוסנייה', 'חופית', 'חוקוק', 'חורה', 'חורפיש', 'חורשים', 'חזון', 'חיבת ציון', 'חיננית', 'חיפה', 'חירות', 'חלוץ', 'חלמיש', 'חלץ', 'חמאם', 'חמד', 'חמדיה', 'חמדת', 'חמרה',
        'חניאל', 'חניתה', 'חנתון', 'חספין', 'חפץ חיים', 'חפצי-בה', 'חצב', 'חצבה', 'חצור הגלילית', 'חצור-אשדוד', 'חצר בארותיים', 'חצרות חולדה', 'חצרות יסף', 'חצרות כ"ח', 'חצרים', 'חרב לאת', 'חרוצים', 'חריש',
        'חרמש', 'חרשים', 'חשמונאים', 'טבריה', 'טובא-זנגריה', 'טורעאן', 'טייבה', 'טירה', 'טירת יהודה', 'טירת כרמל', 'טירת צבי', 'טל שחר', 'טל-אל', 'טללים', 'טלמון', 'טמרה', 'טנא', 'טפחות', 'יבול', 'יבנאל',
        'יבנה', 'יגור', 'יגל', 'יד בנימין', 'יד השמונה', 'יד חנה', 'יד מרדכי', 'יד נתן', 'יד רמב"ם', 'ידידה', 'יהוד-מונוסון', 'יהל', 'יובל', 'יובלים', 'יודפת', 'יונתן', 'יושיביה', 'יזרעאל', 'יחיעם', 'יטבתה',
        'יכיני', 'ינוב', 'ינון', 'יסוד המעלה', 'יסודות', 'יסעור', 'יעד', 'יעל', 'יעף', 'יערה', 'יפיע', 'יפית', 'יפעת', 'יפתח', 'יצהר', 'יציץ', 'יקום', 'יקיר', 'יקנעם עילית', 'יראון', 'ירדנה', 'ירוחם',
        'ירושלים', 'ירחיב', 'ירכא', 'ירקונה', 'ישע', 'ישעי', 'ישרש', 'יתד', 'יתיר', 'כאבול',  'כברי', 'כדורי', 'כדיתה', 'כוכב השחר', 'כוכב יאיר', 'כוכב יעקב', 'כוכב מיכאל', 'כורזים', 'כחל', 'כחלה', 'כיסופים',
        'כישור', 'כליל', 'כלנית', 'כמאנה', 'כמהין', 'כמון', 'כנות', 'כנף', 'כסיפה', 'כסלון', 'כסרא-סמיע', 'כפר אדומים', 'כפר אוריה', 'כפר אחים', 'כפר ביאליק', 'כפר ביל"ו', 'כפר בלום', 'כפר בן נון', 'כפר ברא',
        'כפר ברוך', 'כפר גדעון', 'כפר גלים', 'כפר גליקסון', 'כפר גלעדי', 'כפר דניאל', 'כפר האורנים', 'כפר החורש', 'כפר המכבי', 'כפר הנגיד', 'כפר הנוער הדתי', 'כפר הנשיא', 'כפר הס', 'כפר הרא"ה', 'כפר הרי"ף',
        'כפר ויתקין', 'כפר ורבורג', 'כפר ורדים', 'כפר זוהרים', 'כפר זיתים', 'כפר חב"ד', 'כפר חושן', 'כפר חיטים', 'כפר חיים', 'כפר חנניה', 'כפר חרוב', 'כפר טרומן', 'כפר יאסיף', 'כפר ידידיה', 'כפר יהושע', 'כפר יונה',
        'כפר יחזקאל', 'כפר יעבץ', 'כפר כמא', 'כפר כנא', 'כפר מונש', 'כפר מימון', 'כפר מל"ל', 'כפר מנדא', 'כפר מנחם', 'כפר מסריק', 'כפר מצר', 'כפר מרדכי', 'כפר נטר', 'כפר סאלד', 'כפר סבא', 'כפר סילבר', 'כפר סירקין',
        'כפר עבודה', 'כפר עזה', 'כפר עציון', 'כפר פינס', 'כפר קאסם', 'כפר קיש', 'כפר קרע', 'כפר ראש הנקרה', 'כפר רופין', 'כפר רות', 'כפר שמאי', 'כפר שמואל', 'כפר שמריהו', 'כפר תבור', 'כפר תפוח', 'כרי דשא',
        'כרכום', 'כרם בן זמרה', 'כרם בן שמן', 'כרם מהר"ל', 'כרם שלום', 'כרמי יוסף', 'כרמי צור', 'כרמיאל', 'כרמיה', 'כרמים', 'כרמל', 'לא רשום', 'לבון', 'לביא', 'לבנים', 'להב', 'להבות הבשן', 'להבות חביבה', 'להבים',
        'לוד', 'לוזית', 'לוחמי הגיטאות', 'לוטם', 'לוטן', 'לימן', 'לכיש', 'לפיד', 'לפידות', 'לקיה', 'מאור', 'מאיר שפיה', 'מבוא ביתר', 'מבוא דותן', 'מבוא חורון', 'מבוא חמה', 'מבוא מודיעים', 'מבואות ים', 'מבועים',
        'מבטחים', 'מבקיעים', 'מבשרת ציון', 'מגאר', 'מגדל העמק', 'מגדל עוז', 'מגדלים', 'מגידו', 'מגל', 'מגן', 'מגן שאול', 'מגשימים', 'מדרך עוז', 'מדרשת בן גוריון', 'מדרשת רופין', 'מודיעין עילית', 'מודיעין-מכבים-רעות',
        'מולדה', 'מולדת', 'מוצא עילית', 'מוקייבלה', 'מורן', 'מורשת', 'מזור', 'מזכרת בתיה', 'מזרע', 'מזרעה', 'מחולה', 'מחנה הילה', 'מחנה טלי', 'מחנה יהודית', 'מחנה יוכבד', 'מחנה יפה', 'מחנה יתיר', 'מחנה מרים',
        'מחנה עדי', 'מחנה תל נוף', 'מחניים', 'מחסיה', 'מטולה', 'מטע', 'מי עמי', 'מיטב', 'מייסר', 'מיצר', 'מירב', 'מירון', 'מישר', 'מיתר', 'מכורה', 'מכחול', 'מכמורת', 'מכמנים', 'מלאה', 'מלילות', 'מלכיה', 'מלכישוע',
        'מנוחה', 'מנוף', 'מנות', 'מנחמיה', 'מנרה', 'מנשית זבדה', 'מסד', 'מסדה', 'מסילות', 'מסילת ציון', 'מסלול', 'מסעדה', 'מסעודין אל-עזאזמה', 'מעברות', 'מעגלים', 'מעגן', 'מעגן מיכאל', 'מעוז חיים', 'מעון',
        'מעונה', 'מעיליא', 'מעין ברוך', 'מעין צבי', 'מעלה אדומים', 'מעלה אפרים', 'מעלה גלבוע', 'מעלה גמלא', 'מעלה החמישה', 'מעלה לבונה', 'מעלה מכמש', 'מעלה עירון', 'מעלה עמוס', 'מעלה שומרון', 'מעלות-תרשיחא',
        'מענית', 'מעש', 'מפלסים', 'מצדות יהודה', 'מצובה', 'מצליח', 'מצפה', 'מצפה אבי"ב', 'מצפה אילן', 'מצפה יריחו', 'מצפה נטופה', 'מצפה רמון', 'מצפה שלם', 'מצר', 'מקווה ישראל', 'מרגליות', 'מרום גולן', 'מרחב עם',
        'מרכז שפירא', 'משאבי שדה', 'משגב דב', 'משגב עם', 'משהד', 'משואה', 'משואות יצחק', 'משכיות', 'משמר איילון', 'משמר דוד', 'משמר הירדן', 'משמר הנגב', 'משמר העמק', 'משמר השבעה', 'משמר השרון', 'משמרות', 'משמרת',
        'משען', 'מתן', 'מתת', 'מתתיהו', 'נאות גולן', 'נאות הכיכר', 'נאות מרדכי', 'נאות סמדר', 'נאעורה', 'נבטים', 'נגבה', 'נגוהות', 'נהורה', 'נהלל', 'נהריה', 'נוב', 'נוגה', 'נווה', 'נווה אבות', 'נווה אור',
        'נווה אטי"ב', 'נווה אילן', 'נווה איתן', 'נווה דניאל', 'נווה זוהר', 'נווה זיו', 'נווה חריף', 'נווה ים', 'נווה ימין', 'נווה ירק', 'נווה מבטח', 'נווה מיכאל', 'נווה שלום', 'נועם', 'נוף איילון', 'נופים',
        'נופית', 'נופך', 'נוקדים', 'נורדיה', 'נורית', 'נחושה', 'נחל עוז', 'נחלה', 'נחליאל', 'נחלים', 'נחם', 'נחף', 'נחשולים', 'נחשון', 'נחשונים', 'נטועה', 'נטור', 'נטע', 'נטעים', 'נטף', 'ניין', 'ניל"י', 'ניצן',
        'ניצני סיני', 'ניצני עוז', 'ניצנים', 'ניר אליהו', 'ניר בנים', 'ניר גלים', 'ניר ח"ן', 'ניר יפה', 'ניר יצחק', 'ניר ישראל', 'ניר משה', 'ניר עוז', 'ניר עם', 'ניר עציון', 'ניר עקיבא', 'ניר צבי', 'נירים',
        'נירית', 'נירן', 'נס הרים', 'נס עמים', 'נס ציונה', 'נעורים', 'נעלה', 'נעמ"ה', 'נען', 'נצר חזני', 'נצר סרני', 'נצרת', 'נצרת עילית', 'נשר', 'נתיב הגדוד', 'נתיב הל"ה', 'נתיב העשרה', 'נתיב השיירה', 'נתיבות',
        'נתניה', 'סאסא', 'סביון', 'סגולה', 'סולם', 'סוסיה', 'סופה', 'סלמה', 'סלעית', 'סמר', 'סנסנה', 'סעד', 'סער', 'ספיר', 'סתריה', 'עבדון', 'עברון', 'עגור', 'עדי', 'עדנים', 'עוזה', 'עוזייר', 'עולש', 'עומר',
        'עופר', 'עופרה', 'עוצם', 'עזוז', 'עזר', 'עזריאל', 'עזריה', 'עזריקם', 'עטרת', 'עידן', 'עיילבון', 'עיינות', 'עילוט', 'עין איילה', 'עין אל-אסד', 'עין גב', 'עין גדי', 'עין דור', 'עין הבשור', 'עין הוד',
        'עין החורש', 'עין המפרץ', 'עין הנצי"ב', 'עין העמק', 'עין השופט', 'עין השלושה', 'עין ורד', 'עין זיוון', 'עין חוד', 'עין חצבה', 'עין יהב', 'עין יעקב', 'עין כרם-בי"ס חקלאי', 'עין כרמל', 'עין מאהל', 'עין נקובא',
        'עין עירון', 'עין צורים', 'עין קנייא', 'עין ראפה', 'עין שמר', 'עין שריד', 'עין תמר', 'עינת', 'עיר אובות', 'עכו', 'עלומים', 'עלי', 'עלי זהב', 'עלמה', 'עלמון', 'עמוקה', 'עמינדב', 'עמיעד', 'עמיעוז', 'עמיקם',
        'עמיר', 'עמנואל', 'עמקה', 'ענב', 'עספיא', 'עפולה', 'עץ אפרים', 'עצמון שגב', 'עראבה', 'עראמשה', 'ערב אל נעים', 'ערד', 'ערוגות', 'ערערה', 'ערערה-בנגב', 'עשרת', 'עתלית', 'עתניאל', 'פארן', 'פדואל',
        'פדויים', 'פדיה', 'פוריה - כפר עבודה', 'פוריה - נווה עובד', 'פוריה עילית', 'פוריידיס', 'פורת', 'פטיש', 'פלך', 'פלמחים', 'פני חבר', 'פסגות', 'פסוטה', 'פעמי תש"ז', 'פצאל', 'פקיעין חדשה', 'פרדס חנה-כרכור',
        'פרדסיה', 'פרוד', 'פרזון', 'פרי גן', 'פתח תקווה', 'פתחיה', 'צאלים', 'צביה', 'צבעון', 'צובה', 'צוחר', 'צופיה', 'צופים', 'צופית', 'צופר', 'צוקי ים', 'צוקים', 'צור הדסה', 'צור יצחק', 'צור משה', 'צור נתן',
        'צוריאל', 'צורית', 'ציפורי', 'צלפון', 'צנדלה', 'צפריה', 'צפרירים', 'צפת', 'צרופה', 'צרעה', 'קבוצת יבנה', 'קדומים', 'קדימה-צורן', 'קדמה', 'קדמת צבי', 'קדר', 'קדרון', 'קדרים', 'קוממיות', 'קורנית', 'קטורה',
        'קיסריה', 'קלחים', 'קליה', 'קלנסווה', 'קלע', 'קציר', 'קצר א-סר', 'קצרין', 'קרית אונו', 'קרית ארבע', 'קרית אתא', 'קרית ביאליק', 'קרית גת', 'קרית טבעון', 'קרית ים', 'קרית יערים', 'קרית מוצקין', 'קרית מלאכי',
        'קרית נטפים', 'קרית ענבים', 'קרית עקרון', 'קרית שלמה', 'קרית שמונה', 'קרני שומרון', 'קשת', 'ראמה', 'ראס אל-עין', 'ראס עלי', 'ראש העין', 'ראש פינה', 'ראש צורים', 'ראשון לציון', 'רבבה', 'רבדים', 'רביבים',
        'רביד', 'רגבה', 'רגבים', 'רהט', 'רווחה', 'רוויה', 'רוח מדבר', 'רוחמה', 'רומאנה', 'רומת הייב', 'רועי', 'רותם', 'רחוב', 'רחובות', 'רחלים', 'ריחאניה', 'ריחן', 'ריינה', 'רימונים', 'רינתיה', 'רכסים', 'רם-און',
        'רמות', 'רמות השבים', 'רמות מאיר', 'רמות מנשה', 'רמות נפתלי', 'רמלה', 'רמת גן', 'רמת דוד', 'רמת הכובש', 'רמת השופט', 'רמת השרון', 'רמת יוחנן', 'רמת ישי', 'רמת מגשימים', 'רמת צבי', 'רמת רזיאל', 'רמת רחל',
        'רנן', 'רעים', 'רעננה', 'רקפת', 'רשפון', 'רשפים', 'רתמים', 'שאר ישוב', 'שבי ציון', 'שבי שומרון', 'שבלי - אום אל-גנם', 'שגב-שלום', 'שדה אילן', 'שדה אליהו', 'שדה אליעזר', 'שדה בוקר', 'שדה דוד', 'שדה ורבורג',
        'שדה יואב', 'שדה יעקב', 'שדה יצחק', 'שדה משה', 'שדה נחום', 'שדה נחמיה', 'שדה ניצן', 'שדה עוזיהו', 'שדה צבי', 'שדות ים', 'שדות מיכה', 'שדי אברהם', 'שדי חמד', 'שדי תרומות', 'שדמה', 'שדמות דבורה', 'שדמות מחולה',
        'שדרות', 'שואבה', 'שובה', 'שובל', 'שוהם', 'שומרה', 'שומריה', 'שוקדה', 'שורש', 'שורשים', 'שושנת העמקים', 'שזור', 'שחר', 'שחרות', 'שיבולים', 'שיטים', 'שילה', 'שילת', 'שכניה', 'שלווה', 'שלווה במדבר',
        'שלוחות', 'שלומי', 'שלומית', 'שמיר', 'שמעה', 'שמרת', 'שמשית', 'שני', 'שניר', 'שעב', 'שעורים', 'שעל', 'שעלבים', 'שער אפרים', 'שער הגולן', 'שער העמקים', 'שער מנשה', 'שערי תקווה', 'שפיים', 'שפיר', 'שפר',
        'שפרעם', 'שקד', 'שקף', 'שרונה', 'שריד', 'שרשרת', 'שתולה', 'שתולים', 'תאשור', 'תדהר', 'תובל', 'תומר', 'תושיה', 'תימורים', 'תירוש', 'תל אביב - יפו', 'תל יוסף', 'תל יצחק', 'תל מונד', 'תל עדשים', 'תל קציר',
        'תל שבע', 'תל תאומים', 'תלם', 'תלמי אליהו', 'תלמי אלעזר', 'תלמי ביל"ו', 'תלמי יוסף', 'תלמי יחיאל', 'תלמי יפה', 'תלמים', 'תמרת', 'תנובות', 'תעוז', 'תפרח', 'תקומה', 'תקוע', 'תרום',
    ];

    /**
     * {@link} https://he.wikipedia.org/wiki/%D7%A4%D7%95%D7%A8%D7%98%D7%9C:%D7%9E%D7%93%D7%99%D7%A0%D7%95%D7%AA_%D7%94%D7%A2%D7%95%D7%9C%D7%9D/%D7%9E%D7%93%D7%99%D7%A0%D7%95%D7%AA_%D7%91%D7%9E%D7%99%D7%95%D7%A0%D7%99%D7%9D_%D7%A9%D7%95%D7%A0%D7%99%D7%9D
     */
    protected static $country = [
        'אוגנדה', 'אוזבקיסטן', 'אוסטריה', 'אוסטרליה', 'אוקראינה', 'אורוגוואי', 'אזרבייג\'ן', 'איטליה', 'איי מרשל', 'סיישל', 'איי שלמה', 'אינדונזיה',
        'איסלנד', 'איראן', 'אירלנד', 'אל סלוודור', 'אלבניה', 'אלג\'יריה', 'אנגולה', 'אנדורה', 'אנטיגואה וברבודה', 'אסטוניה', 'אפגניסטן', 'אקוודור',
        'ארגנטינה', 'אריתריאה', 'ארמניה', 'ארצות הברית', 'אתיופיה', 'בהאמה', 'בהוטן', 'בוטסואנה', 'בולגריה', 'בוליביה', 'בוסניה והרצגובינה', 'בורונדי', 'בורקינה פאסו', 'בחריין',
        'בלגיה', 'בליז', 'בלארוס', 'בנגלדש', 'בנין', 'ברבדוס', 'ברוניי', 'ברזיל', 'גאורגיה', 'גאנה', 'גבון', 'גואטמלה', 'גיאנה', 'ג\'יבוטי', 'גינאה', 'גינאה ביסאו', 'גיניאה המשוונית',
        'גמביה', 'ג\'מייקה', 'גרמניה', 'גרנדה', 'דומיניקה', 'דנמרק', 'דרום אפריקה', 'דרום סודאן', 'האיטי', 'האמירויות הערביות המאוחדות', 'הודו', 'הולנד', 'הונגריה', 'הונדורס',
        'הממלכה המאוחדת', 'וייטנאם', 'ונואטו', 'ונצואלה', 'זימבבואה', 'זמביה', 'חוף השנהב', 'טג\'יקיסטן', 'טובאלו', 'טוגו', 'טונגה', 'טורקיה', 'טורקמניסטן', 'טנזניה', 'טרינידד וטובגו',
        'יוון', 'יפן', 'ירדן', 'ישראל', 'כווית', 'כף ורדה', 'לאוס', 'לבנון', 'לוב', 'לוקסמבורג', 'לטביה', 'ליבריה', 'ליטא', 'ליכטנשטיין', 'לסוטו', 'מאוריטניה', 'מאוריציוס',
        'מאלי', 'מדגסקר', 'מוזמביק', 'מולדובה', 'מונגוליה', 'מונטנגרו', 'מונאקו', 'מזרח טימור', 'מיאנמר', 'מיקרונזיה', 'מלאווי', 'המלדיביים', 'מלזיה', 'מלטה', 'מצרים', 'מקדוניה',
        'מקסיקו', 'מרוקו', 'נאורו', 'נורווגיה', 'ניגריה', 'ניו זילנד', 'ניז\'ר', 'ניקרגואה', 'נמיביה', 'נפאל', 'סאו טומה ופרינסיפה', 'סודאן', 'סווזילנד', 'סומליה', 'סוריה', 'סורינם',
        'סיירה לאון', 'סין', 'סינגפור', 'סלובניה', 'סלובקיה', 'סמואה', 'סן מרינו', 'סנגל', 'סנט וינסנט והגרנדינים', 'סנט לוסיה', 'סנט קיטס ונוויס', 'ספרד', 'סרביה', 'סרי לנקה', 'עומאן',
        'עיראק', 'ערב הסעודית', 'פולין', 'פורטוגל', 'פיג\'י', 'פיליפינים', 'פינלנד', 'פלאו', 'פנמה', 'פפואה גינאה החדשה', 'פקיסטן', 'פרגוואי', 'פרו', 'צ\'אד', 'צ\'ילה', 'צ\'כיה', 'צרפת',
        'קובה', 'קולומביה', 'קומורו', 'קונגו', 'קוסטה ריקה', 'קוריאה הדרומית', 'קוריאה הצפונית', 'קזחסטן', 'קטאר', 'קירגיזסטן', 'קיריבטי', 'קמבודיה', 'קמרון', 'קנדה', 'קניה', 'קפריסין',
        'קרואטיה', 'קריית הוותיקן', 'רואנדה', 'רומניה', 'רוסיה', 'הרפובליקה הדומיניקנית', 'הרפובליקה המרכז אפריקאית', 'הרפובליקה הסינית', 'שוודיה', 'שווייץ', 'תאילנד', 'תוניסיה', 'תימן',
    ];
    protected static $cityFormats = [
        '{{citySuffix}}',
    ];
    protected static $streetNameFormats = [
        '{{streetSuffix}} {{firstName}}',
        '{{streetSuffix}} {{lastName}}',
    ];
    protected static $streetAddressFormats = [
        '{{streetName}} {{buildingNumber}} ',
        '{{streetName}} {{buildingNumber}} {{secondaryAddress}}',
    ];
    protected static $addressFormats = [
        "{{streetAddress}}\n{{city}}, {{postcode}}",
    ];
    protected static $secondaryAddressFormats = ['דירה ##', 'קומה ##'];

    /**
     * @example 'Appt. 350'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::$secondaryAddressFormats));
    }
}
