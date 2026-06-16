<?php
/**
 * Rendering helpers for EVM Content Page 01.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Returns the default editable content for page 01.
 *
 * Update these values to change the default copy, stats, cards, media labels,
 * and CTA messaging without editing the template markup below.
 *
 * @return array<string, mixed>
 */
function evm_get_content_page_01_defaults() {
	return array(
		'hero'               => array(
			'eyebrow'          => 'מתחם חוויות פרטי לקבוצות, משפחות וימי הולדת',
			'headline_lines'   => array(
				'נכנסים למשימה.',
				'יוצאים עם',
			),
			'headline_accent'  => 'חוויה.',
			'subheadline'      => 'חדרי בריחה, ימי הולדת, אירועי חברה וחוויות משחק לקבוצות, משפחות, ילדים ומבוגרים — במתחם פרטי, נגיש ובטוח.',
			'trust_note'       => 'אקשן • צחוק • שיתוף פעולה • זמן שמתקתק',
			'primary_cta_text' => 'בחרו חוויה והזמינו',
			'primary_cta_url'  => '#booking',
			'secondary_cta'    => array(
				'text' => 'דברו איתנו בוואטסאפ',
				'url'  => 'https://wa.me/972500000000',
			),
			'hero_image_url'         => '',
			'hero_video_mp4_url'     => '',
			'hero_video_webm_url'    => '',
			'hero_video_poster_url'  => '',
			'hero_youtube_url'       => 'https://www.youtube.com/watch?v=sIhnkREl_Y4&t=1s',
			'hero_badge'             => 'בחרו את המשימה שלכם',
			'hero_kicker'            => '',
			'hero_placeholder'       => array(
				'eyebrow' => 'Media Experience Frame',
				'title'   => 'מסך חוויה מרכזי',
				'note'    => 'מוכן לוידאו, אנימציה או לוטי בהמשך.',
			),
			'hero_chips'       => array(
				array(
					'icon'        => 'swords',
					'title'       => 'חדר בריחה',
					'description' => 'אקשן, רמזים ומשימות לקבוצה חדה.',
				),
				array(
					'icon'        => 'cake',
					'title'       => 'ימי הולדת',
					'description' => 'חגיגה פרטית עם תוכן ואווירה מחשמלת.',
				),
				array(
					'icon'        => 'briefcase',
					'title'       => 'גיבוש צוותים',
					'description' => 'שיתוף פעולה, צחוק ואנרגיה משותפת.',
				),
				array(
					'icon'        => 'home',
					'title'       => 'משפחות וילדים',
					'description' => 'הרפתקה נגישה ומהנה לכל הגילים.',
				),
			),
			'metrics'          => array(
				array(
					'icon'   => 'star',
					'value'  => '5.0',
					'label'  => 'ציון מושלם',
					'detail' => 'מביקורות בגוגל',
				),
				array(
					'icon'   => 'group',
					'value'  => '2,000+',
					'label'  => 'קבוצות מרוצות',
					'detail' => 'שיחקו אצלנו',
				),
				array(
					'icon'   => 'shield',
					'value'  => 'ממ״ד',
					'label'  => 'במקום',
					'detail' => 'לביטחון ושקט נפשי',
				),
				array(
					'icon'   => 'group',
					'value'  => 'מתאים לכולם',
					'label'  => 'ילדים, משפחות וצוותים',
					'detail' => '',
				),
			),
		),
		'experience_selector' => array(
			'eyebrow' => 'לכל גיל ולכל הרכב',
			'title'   => 'בחרו את סוג החוויה שמתאים לכם',
			'description' => 'בין אם אתם מחפשים פעילות לילדים, ערב חברים, יום הולדת או גיבוש לצוות — אצלנו החוויה מותאמת לקבוצה.',
			'items'   => array(
				array(
					'icon' => 'spark',
					'title' => 'ילדים ונוער',
					'description' => 'חוויה מלאת אנרגיה, סקרנות והפעלה שמתאימה לקבוצות צעירות בלי להרגיש ילדותית.',
				),
				array(
					'icon' => 'home',
					'title' => 'משפחות',
					'description' => 'זמן איכות משותף שמחבר בין דורות ונותן לכולם להרגיש חלק מהמשחק.',
				),
				array(
					'icon' => 'group',
					'title' => 'חברים',
					'description' => 'ערב זורם עם צחוק, תחרות בריאה ורגעים שממשיכים לדבר עליהם גם אחר כך.',
				),
				array(
					'icon' => 'heart',
					'title' => 'זוגות',
					'description' => 'דייט חווייתי, מפתיע וקולנועי שמרגיש אחר ושובר את השגרה.',
				),
				array(
					'icon' => 'cake',
					'title' => 'ימי הולדת',
					'description' => 'חגיגה פרטית עם תוכן אמיתי, אווירה חזקה וזיכרון שנשאר עם כל הקבוצה.',
				),
				array(
					'icon' => 'briefcase',
					'title' => 'עובדים וצוותים',
					'description' => 'פעילות גיבוש איכותית שמוציאה אנשים מהשגרה ומחברת אותם דרך חוויה משותפת.',
				),
			),
		),
		'pain'               => array(
			'eyebrow'     => 'ערב גיבוש שלא שוכחים',
			'title'       => 'נמאס מעוד ערב רגיל?',
			'description' => 'GameIt הוא לא עוד בילוי חולף. זו חוויה שמפעילה את כולם יחד, שוברת את הקרח מהר, ומחליפה עוד מסעדה או סרט בזיכרון משותף שממשיכים לדבר עליו גם למחרת.',
			'bullets'     => array(
				'חוויה אינטראקטיבית שמוציאה אנשים מהטלפון ומהשגרה.',
				'שילוב של אדרנלין, צחוק, עבודת צוות ואתגר מדויק לקבוצה.',
				'מתחם שמרגיש פרימיום מהרגע שמגיעים ועד הרגע שמסיימים.',
			),
		),
		'steps'              => array(
			'eyebrow' => 'פשוט, מהיר ומדויק',
			'title'   => 'איך זה עובד',
			'items'   => array(
				array(
					'number'      => '01',
					'title'       => 'בוחרים חוויה',
					'description' => 'מתאימים את סוג הפעילות לקבוצה, למטרה ולאווירה שאתם רוצים לייצר.',
				),
				array(
					'number'      => '02',
					'title'       => 'מגיעים למתחם',
					'description' => 'נכנסים ללוקיישן שמייצר אווירה מהרגע הראשון ומכין את כולם לחוויה.',
				),
				array(
					'number'      => '03',
					'title'       => 'מקבלים תדרוך',
					'description' => 'הצוות מסביר, ממקד ומעלה את האנרגיה כדי שכל משתתף ירגיש חלק.',
				),
				array(
					'number'      => '04',
					'title'       => 'נכנסים למשימה',
					'description' => 'משחקים, פותרים, צוחקים ומסיימים עם חוויה קבוצתית שלא דומה לשום ערב רגיל.',
				),
			),
		),
		'experiences'        => array(
			'eyebrow' => 'התאמה לכל הרכב',
			'title'   => 'חוויות שמרגישות תפורות לקבוצה',
			'items'   => array(
				array(
					'icon'        => 'group',
					'title'       => 'חברים',
					'description' => 'אקשן, תחרות, צחוק ורגעים שמרימים את כל החבורה.',
				),
				array(
					'icon'        => 'home',
					'title'       => 'משפחות',
					'description' => 'פעילות משותפת שמחברת בין דורות ומערבת את כולם באמת.',
				),
				array(
					'icon'        => 'cake',
					'title'       => 'ימי הולדת',
					'description' => 'חגיגה שמרגישה מושקעת, מרגשת ומלאה באנרגיה טובה.',
				),
				array(
					'icon'        => 'briefcase',
					'title'       => 'גיבוש עובדים',
					'description' => 'חוויה שמוציאה מהשגרה ומייצרת שיתוף פעולה אמיתי בין אנשים.',
				),
				array(
					'icon'        => 'heart',
					'title'       => 'זוגות',
					'description' => 'דייט אחר, חד, מפתיע ועם הרבה יותר חוויה מסתם עוד ערב בחוץ.',
				),
				array(
					'icon'        => 'vip',
					'title'       => 'VIP',
					'description' => 'אירוח יוקרתי, פרטי ומדויק למי שמחפש חוויה ברמה אחרת.',
				),
			),
		),
		'visual_experience'  => array(
			'eyebrow'                       => 'חדר הדגל שלנו',
			'title'                         => 'גיבורים נגד נבלים',
			'subtitle'                      => 'העולם מחכה להכרעה, ואתם נכנסים לקרב האחרון.',
			'body'                          => array(
				'שתי קבוצות נכנסות לחדר כפול, כל אחת בצד אחר של המשחק: גיבורים מול נבלים.',
				'כל קבוצה פותרת חידות, מפעילה מנגנונים, מחפשת רמזים ומנסה לנצח את הצד השני לפני שהזמן נגמר.',
				'אבל כאן זה לא רק לברוח מהחדר. כל מהלך שלכם יכול להשפיע על הקבוצה שמולכם, וכל טעות יכולה להפוך את הקרב ברגע.',
				'זו חוויה תחרותית, מצחיקה וסוחפת שמתאימה לילדים, בני נוער, משפחות, חברים, ימי הולדת וצוותים.',
				'אקשן, צחוק, לחץ זמן, שיתוף פעולה והרבה רגעים של “רגע, מה עכשיו?!”',
				'באיזה צד אתם בוחרים להיות?',
			),
			'feature_cards'                  => array(
				array(
					'icon'  => 'group',
					'title' => '2 קבוצות במקביל',
					'text'  => 'ראש בראש עד השנייה האחרונה',
				),
				array(
					'icon'  => 'shield',
					'title' => 'חדר כפול',
					'text'  => 'קיר משותף, משימות והפתעות',
				),
				array(
					'icon'  => 'spark',
					'title' => 'כל מהלך משפיע',
					'text'  => 'החלטות שלכם משנות את המשחק',
				),
				array(
					'icon'  => 'home',
					'title' => 'מתאים לכולם',
					'text'  => 'ילדים, משפחות, חברים וצוותים',
				),
				array(
					'icon'  => 'swords',
					'title' => 'אקשן וחידות',
					'text'  => 'חשיבה, פעולה וצחוק באותו חדר',
				),
			),
			'primary_cta_text'               => 'הזמינו את החדר',
			'primary_cta_url'                => '#booking',
			'secondary_cta_text'             => 'שאלו אותנו בוואטסאפ',
			'secondary_cta_url'              => 'https://wa.me/972500000000',
			'media_eyebrow'                 => 'חדר תחרותי כפול',
			'media_title'                   => 'הצצה לחדר: גיבורים נגד נבלים',
			'media_note'                    => 'הווידאו יעלה כאן בהמשך',
			'villains_room_video_mp4_url'    => '',
			'villains_room_video_webm_url'   => '',
			'villains_room_video_poster_url' => '',
			'villains_room_youtube_url'      => '',
		),
		'why'                => array(
			'eyebrow' => 'למה דווקא אצלנו',
			'title'   => 'למה לבחור ב-GameIt',
			'items'   => array(
				array(
					'icon'        => 'spark',
					'title'       => 'חוויה שמרגישה יוקרתית',
					'description' => 'מהעיצוב ועד ההפעלה, הכול בנוי כדי להרגיש מושקע ולא גנרי.',
				),
				array(
					'icon'        => 'group',
					'title'       => 'מתאים לקבוצות שונות',
					'description' => 'מכמה חברים ועד צוותים, משפחות ואירועים פרטיים.',
				),
				array(
					'icon'        => 'clock',
					'title'       => 'קצב שמחזיק אנרגיה',
					'description' => 'אין רגעים מתים. החוויה נשארת חדה, זורמת ומרתקת.',
				),
				array(
					'icon'        => 'shield',
					'title'       => 'הפעלה מסודרת ובטוחה',
					'description' => 'תדרוך ברור, צוות מקצועי, וסביבה שמאפשרת ליהנות בראש שקט.',
				),
				array(
					'icon'        => 'location',
					'title'       => 'מיקום נוח במרכז',
					'description' => 'קל להגיע, קל לארגן, וקל להפוך את זה לערב שכולם זוכרים.',
				),
				array(
					'icon'        => 'trophy',
					'title'       => 'המלצות שמגבות את ההבטחה',
					'description' => 'ביקורות חזקות וקבוצות חוזרות שמוכיחות שהחוויה באמת עובדת.',
				),
			),
		),
		'faq'                => array(
			'eyebrow' => 'שאלות נפוצות',
			'title'   => 'כל מה שרוצים לדעת לפני שמזמינים',
			'items'   => array(
				array(
					'question' => 'למי החוויה מתאימה?',
					'answer'   => 'החוויה מתאימה לחברים, משפחות, זוגות, ימי הולדת, צוותים ואירועים פרטיים, עם התאמה לפי סוג הקבוצה.',
				),
				array(
					'question' => 'צריך ניסיון קודם בחדרי בריחה?',
					'answer'   => 'לא. ההדרכה במקום מכניסה את כולם לעניינים, גם אם זו הפעם הראשונה שלהם.',
				),
				array(
					'question' => 'כמה זמן נמשכת הפעילות?',
					'answer'   => 'משך הפעילות משתנה לפי החוויה שנבחרת, אבל היא בנויה כדי לייצר ערב מלא, זורם ומדויק לקבוצה.',
				),
				array(
					'question' => 'אפשר להזמין לקבוצה או לאירוע חברה?',
					'answer'   => 'כן. אפשר לתאם חוויות לקבוצות, ימי גיבוש, ימי הולדת ואירועים פרטיים עם התאמות מתאימות.',
				),
				array(
					'question' => 'יש אפשרות ל-VIP או אירוח פרטי?',
					'answer'   => 'כן. יש מסלולים ואפשרויות שמתאימות לאירוח פרטי וחוויה פרימיום ברמה גבוהה יותר.',
				),
			),
		),
		'final_cta'          => array(
			'eyebrow'            => 'מוכנים לחוויה הבאה שלכם?',
			'title'              => 'בואו נהפוך את הערב הבא שלכם למשהו שבאמת זוכרים',
			'description'        => 'אם אתם מחפשים חוויה שמרגישה אחרת מהרגע הראשון, זה הזמן לשריין מקום ולבנות ערב שמדברים עליו גם אחרי שהוא נגמר.',
			'primary_cta_text'   => 'שריינו מקום',
			'primary_cta_url'    => '#booking',
			'secondary_cta_text' => 'דברו איתנו בוואטסאפ',
			'secondary_cta_url'  => 'https://wa.me/972500000000',
		),
		'stats'              => array(
			array(
				'icon'        => 'trophy',
				'value'       => '240+',
				'numeric'     => '240',
				'label'       => 'ביקורות מאומתות',
				'description' => 'לקוחות אמיתיים שכבר היו, שיחקו וחזרו להמליץ.',
			),
			array(
				'icon'        => 'star-outline',
				'value'       => '5.0',
				'numeric'     => '5.0',
				'label'       => 'דירוג ממוצע',
				'description' => 'רמת שביעות רצון שמציבה רף ברור לחוויה כולה.',
			),
			array(
				'icon'        => 'smile',
				'value'       => '2,000+',
				'numeric'     => '2000',
				'label'       => 'משתתפים מרוצים',
				'description' => 'קבוצות, חברים, משפחות וצוותים שכבר עברו את החוויה.',
			),
		),
	);
}

/**
 * Returns SVG markup for a named icon.
 *
 * @param string $icon Icon key.
 * @return string
 */
function evm_content_page_01_get_icon( $icon ) {
	$icons = array(
		'star'          => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2.75l2.92 5.92 6.53.95-4.72 4.6 1.11 6.5L12 17.65l-5.84 3.07 1.11-6.5-4.72-4.6 6.53-.95L12 2.75z"/></svg>',
		'group'         => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M16 11a4 4 0 10-3.999-4A4 4 0 0016 11zm-8 0a4 4 0 10-4-4 4 4 0 004 4zm8 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4zM8 13c-.29 0-.62.02-.97.05C4.64 13.24 0 14.43 0 17v2h6v-2c0-1.54.82-2.89 2.22-4A8.83 8.83 0 008 13z"/></svg>',
		'calendar'      => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 4h-1V2h-2v2H8V2H6v2H5a3 3 0 00-3 3v12a3 3 0 003 3h14a3 3 0 003-3V7a3 3 0 00-3-3zm1 15a1 1 0 01-1 1H5a1 1 0 01-1-1v-8h16zm0-10H4V7a1 1 0 011-1h14a1 1 0 011 1z"/></svg>',
		'accessibility' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 4.5A2.5 2.5 0 109.5 2 2.5 2.5 0 0012 4.5zm7.5 3.5H15l-1.5 1.5h-3L9 8H4.5a1 1 0 000 2h3.64l1.86 1.86V22h2v-6h1v6h2V11.86L16.86 10h2.64a1 1 0 000-2z"/></svg>',
		'vip'           => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 7l3 2 3-4 3 4 3-4 3 4 3-2-2 13H5L3 7zm5.8 10h6.4l.8-5H8l.8 5zM9 14h1.5l.5-2H9.2L9 14zm4.3 0h1.5l-.2-2H13l.3 2z"/></svg>',
		'cake'          => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3a1.5 1.5 0 011.5 1.5c0 .55-.3 1.02-.75 1.28V8h3a2 2 0 012 2v2H6v-2a2 2 0 012-2h3V5.78A1.49 1.49 0 0110.5 4.5 1.5 1.5 0 0112 3zm-6 11h12v5a2 2 0 01-2 2H8a2 2 0 01-2-2v-5zm2 2v3h8v-3H8z"/></svg>',
		'swords'        => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5.59 3L11 8.41 9.59 9.82 8 8.24l-1.41 1.41 1.58 1.59-1.41 1.41L3 7.24 5.59 3zm12.82 0L21 7.24l-3.76 3.76-1.41-1.41 1.58-1.59L16 6.59l-1.59 1.58L13 6.76 18.41 3zM11 11l2 2-6.5 6.5a1.41 1.41 0 01-2 0l-.5-.5a1.41 1.41 0 010-2L11 11zm2 0l6.5 6.5a1.41 1.41 0 010 2l-.5.5a1.41 1.41 0 01-2 0L11 13l2-2z"/></svg>',
		'trophy'        => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M18 2H6v3H3v2a5 5 0 005 5h.1A5.99 5.99 0 0011 14.91V18H8v2h8v-2h-3v-3.09A5.99 5.99 0 0015.9 12H16a5 5 0 005-5V5h-3V2zm-2 8a4 4 0 01-8 0V4h8v6zM5 7V7h1v2a4.92 4.92 0 00.55 2.24A3 3 0 015 7zm14 0a3 3 0 01-1.55 2.64A4.92 4.92 0 0018 9V7h1z"/></svg>',
		'star-outline'  => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M22 9.24l-7.19-.62L12 2 9.19 8.62 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.64-7.03L22 9.24zm-10 5.83l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 5.73l1.7 4.07 4.38.38-3.32 2.88 1 4.28z"/></svg>',
		'smile'         => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2a10 10 0 1010 10A10 10 0 0012 2zm-4 7a1.5 1.5 0 11-1.5 1.5A1.5 1.5 0 018 9zm4 9a6.87 6.87 0 01-5-2.12l1.41-1.41a4.93 4.93 0 007.18 0L17 15.88A6.87 6.87 0 0112 18zm4-6a1.5 1.5 0 111.5-1.5A1.5 1.5 0 0116 12z"/></svg>',
		'whatsapp'      => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12.04 2C6.56 2 2.1 6.46 2.1 11.94c0 1.76.46 3.48 1.34 5L2 22l5.2-1.36a9.9 9.9 0 004.84 1.24h.01c5.48 0 9.94-4.46 9.94-9.94A9.95 9.95 0 0012.04 2zm5.78 14.06c-.24.67-1.4 1.29-1.94 1.38-.5.08-1.13.12-1.82-.11a15.48 15.48 0 01-5.3-3.29A12.28 12.28 0 015.9 9.45c-.34-.92.34-1.43.47-1.63.13-.2.28-.24.38-.24h.27c.08 0 .2-.03.3.22.11.27.38.92.41.99.03.08.05.17-.02.27-.07.1-.1.17-.2.27-.1.1-.22.22-.31.29-.1.08-.2.17-.09.34.11.17.49.81 1.05 1.31.72.64 1.32.84 1.5.94.18.1.28.08.39-.05.11-.13.46-.53.58-.72.12-.19.24-.16.41-.09.17.07 1.08.51 1.26.6.18.09.3.13.34.2.05.08.05.44-.19 1.11z"/></svg>',
		'home'          => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l9 8h-3v10h-4v-6H10v6H6V11H3l9-8z"/></svg>',
		'briefcase'     => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M10 4h4a2 2 0 012 2v1h4a2 2 0 012 2v9a3 3 0 01-3 3H5a3 3 0 01-3-3V9a2 2 0 012-2h4V6a2 2 0 012-2zm4 3V6h-4v1h4zm6 5H4v6a1 1 0 001 1h14a1 1 0 001-1v-6zm-1-3H5a1 1 0 00-1 1v1h16v-1a1 1 0 00-1-1z"/></svg>',
		'heart'         => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21s-7.3-4.53-9.6-8.26C.57 9.74 2.16 5.5 6.1 4.55A5.37 5.37 0 0112 6.09a5.37 5.37 0 015.9-1.54c3.94.95 5.53 5.19 3.7 8.19C19.3 16.47 12 21 12 21z"/></svg>',
		'spark'         => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2l1.9 5.1L19 9l-5.1 1.9L12 16l-1.9-5.1L5 9l5.1-1.9L12 2zm7 11l.95 2.55L22.5 16l-2.55.45L19 19l-.95-2.55L15.5 16l2.55-.45L19 13zM5 14l1.13 3.05L9 18.18l-2.87.51L5 22l-1.13-3.31L1 18.18l2.87-1.13L5 14z"/></svg>',
		'clock'         => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2a10 10 0 1010 10A10 10 0 0012 2zm1 11h4v-2h-3V6h-2v7z"/></svg>',
		'shield'        => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2l8 3v6c0 5.25-3.44 10.74-8 12-4.56-1.26-8-6.75-8-12V5l8-3zm0 3.13L6 7.38v3.58c0 4.1 2.56 8.44 6 9.84 3.44-1.4 6-5.74 6-9.84V7.38l-6-2.25z"/></svg>',
		'location'      => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2a7 7 0 00-7 7c0 5.13 7 13 7 13s7-7.87 7-13a7 7 0 00-7-7zm0 10a3 3 0 113-3 3 3 0 01-3 3z"/></svg>',
		'question'      => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M11 18h2v2h-2zm1-16a10 10 0 1010 10A10 10 0 0012 2zm0 18a8 8 0 118-8 8 8 0 01-8 8zm0-14a4 4 0 00-4 4h2a2 2 0 114 0c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5a4 4 0 00-4-4z"/></svg>',
		'arrow'         => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M13.17 12l-4.59-4.59L10 6l6 6-6 6-1.42-1.41L13.17 12z"/></svg>',
	);

	return isset( $icons[ $icon ] ) ? $icons[ $icon ] : '';
}

/**
 * Escapes SVG icon markup.
 *
 * @param string $icon Icon key.
 * @return string
 */
function evm_content_page_01_icon_html( $icon ) {
	return wp_kses(
		evm_content_page_01_get_icon( $icon ),
		array(
			'svg'  => array(
				'viewBox'     => true,
				'aria-hidden' => true,
			),
			'path' => array(
				'd' => true,
			),
		)
	);
}

/**
 * Converts a YouTube watch/share URL to a quiet embed URL for optional fallback use.
 *
 * @param string $url YouTube URL from defaults.
 * @return string
 */
function evm_content_page_01_get_youtube_embed_url( $url ) {
	if ( empty( $url ) ) {
		return '';
	}

	$parts = wp_parse_url( $url );

	if ( empty( $parts['host'] ) ) {
		return '';
	}

	$host     = strtolower( $parts['host'] );
	$video_id = '';

	if ( false !== strpos( $host, 'youtu.be' ) && ! empty( $parts['path'] ) ) {
		$video_id = trim( $parts['path'], '/' );
	} elseif ( false !== strpos( $host, 'youtube.com' ) ) {
		if ( ! empty( $parts['query'] ) ) {
			parse_str( $parts['query'], $query_args );
			$video_id = isset( $query_args['v'] ) ? $query_args['v'] : '';
		}

		if ( empty( $video_id ) && ! empty( $parts['path'] ) && false !== strpos( $parts['path'], '/embed/' ) ) {
			$video_id = basename( $parts['path'] );
		}
	}

	$video_id = preg_replace( '/[^a-zA-Z0-9_-]/', '', (string) $video_id );

	if ( empty( $video_id ) ) {
		return '';
	}

	return add_query_arg(
		array(
			'autoplay'       => '1',
			'mute'           => '1',
			'loop'           => '1',
			'playlist'       => $video_id,
			'controls'       => '0',
			'modestbranding' => '1',
			'playsinline'    => '1',
			'rel'            => '0',
			'disablekb'      => '1',
			'fs'             => '0',
			'iv_load_policy' => '3',
			'start'          => '1',
		),
		'https://www.youtube.com/embed/' . $video_id
	);
}

/**
 * Builds the page content markup.
 *
 * @param array<string, string> $attributes High-change shortcode attributes.
 * @return string
 */
function evm_render_content_page_01( $attributes ) {
	$content = evm_get_content_page_01_defaults();

	if ( ! empty( $attributes['primary_cta_url'] ) ) {
		$content['hero']['primary_cta_url']      = $attributes['primary_cta_url'];
		$content['final_cta']['primary_cta_url'] = $attributes['primary_cta_url'];
	}

	if ( ! empty( $attributes['whatsapp_url'] ) ) {
		$content['hero']['secondary_cta']['url']    = $attributes['whatsapp_url'];
		$content['final_cta']['secondary_cta_url']  = $attributes['whatsapp_url'];
	}

	if ( ! empty( $attributes['hero_image_url'] ) ) {
		$content['hero']['hero_image_url'] = $attributes['hero_image_url'];
	}

	if ( ! empty( $attributes['hero_video_mp4_url'] ) ) {
		$content['hero']['hero_video_mp4_url'] = $attributes['hero_video_mp4_url'];
	}

	if ( ! empty( $attributes['hero_video_webm_url'] ) ) {
		$content['hero']['hero_video_webm_url'] = $attributes['hero_video_webm_url'];
	}

	if ( ! empty( $attributes['hero_video_poster_url'] ) ) {
		$content['hero']['hero_video_poster_url'] = $attributes['hero_video_poster_url'];
	}

	if ( ! empty( $attributes['hero_youtube_url'] ) ) {
		$content['hero']['hero_youtube_url'] = $attributes['hero_youtube_url'];
	}

	if ( ! empty( $attributes['primary_cta_text'] ) ) {
		$content['hero']['primary_cta_text']      = $attributes['primary_cta_text'];
		$content['final_cta']['primary_cta_text'] = $attributes['primary_cta_text'];
	}

	$hero_has_native_video = ! empty( $content['hero']['hero_video_mp4_url'] ) || ! empty( $content['hero']['hero_video_webm_url'] );
	$hero_youtube_embed    = $hero_has_native_video ? '' : evm_content_page_01_get_youtube_embed_url( $content['hero']['hero_youtube_url'] );
	$hero_poster_url       = ! empty( $content['hero']['hero_video_poster_url'] ) ? $content['hero']['hero_video_poster_url'] : $content['hero']['hero_image_url'];
	$room_has_native_video = ! empty( $content['visual_experience']['villains_room_video_mp4_url'] ) || ! empty( $content['visual_experience']['villains_room_video_webm_url'] );
	$room_youtube_embed    = $room_has_native_video ? '' : evm_content_page_01_get_youtube_embed_url( $content['visual_experience']['villains_room_youtube_url'] );
	$room_poster_url       = ! empty( $content['visual_experience']['villains_room_video_poster_url'] ) ? $content['visual_experience']['villains_room_video_poster_url'] : '';

	$content['pain']['eyebrow']     = 'ערב גיבוש שלא שוכחים';
	$content['pain']['title']       = 'נמאס מעוד ערב רגיל?';
	$content['pain']['description'] = 'מסעדה, סרט או עוד ישיבה בבית כבר לא תמיד מרגשים. ב־GameIt הקבוצה נכנסת יחד למשימה, צוחקת, נלחצת, משתפת פעולה ויוצאת עם חוויה שממשיכים לדבר עליה גם אחרי שהמשחק נגמר.';

	if ( empty( $content['pain']['supporting_line'] ) ) {
		$content['pain']['supporting_line'] = 'פעילות שמזיזה את כולם מהכיסא ויוצרת רגעים שאי אפשר לקבל בעוד ערב רגיל.';
	}

	if ( empty( $content['pain']['comparison_separator'] ) ) {
		$content['pain']['comparison_separator'] = 'או';
	}

	if ( empty( $content['pain']['regular_kicker'] ) ) {
		$content['pain']['regular_kicker'] = 'שגרה מוכרת';
	}

	if ( empty( $content['pain']['gameit_kicker'] ) ) {
		$content['pain']['gameit_kicker'] = 'האקשן מתחיל';
	}

	if ( empty( $content['pain']['comparison'] ) || ! is_array( $content['pain']['comparison'] ) ) {
		$content['pain']['comparison'] = array(
			'regular' => array(
				'title' => 'עוד ערב רגיל',
				'items' => array(
					'יושבים',
					'מדברים קצת',
					'מסתכלים בטלפון',
					'חוזרים הביתה',
				),
			),
			'gameit'  => array(
				'title' => 'חוויה ב־GameIt',
				'items' => array(
					'נכנסים למשימה',
					'פותרים חידות',
					'צוחקים בלחץ',
					'משתפים פעולה',
					'יוצאים עם סיפור',
				),
			),
		);
	}

	if ( empty( $content['pain']['hook_cards'] ) || ! is_array( $content['pain']['hook_cards'] ) ) {
		$content['pain']['hook_cards'] = array(
			array(
				'icon'  => 'group',
				'title' => 'כולם משתתפים',
				'text'  => 'גם מי שבדרך כלל שקט נכנס לעניינים כשהשעון מתחיל לרוץ.',
			),
			array(
				'icon'  => 'spark',
				'title' => 'צחוק, לחץ ואדרנלין',
				'text'  => 'הרגעים הכי טובים קורים כשכולם מנסים להבין מה עושים עכשיו.',
			),
			array(
				'icon'  => 'heart',
				'title' => 'זיכרון משותף',
				'text'  => 'זו לא פעילות שרק עוברים, זו חוויה שממשיכה איתכם אחרי שיוצאים.',
			),
			array(
				'icon'  => 'star-outline',
				'title' => 'מתאים לכל גיל',
				'text'  => 'ילדים, בני נוער, משפחות ומבוגרים יכולים ליהנות יחד מאותה חוויה.',
			),
			array(
				'icon'  => 'clock',
				'title' => 'לא עוד ישיבה',
				'text'  => 'פעילות שמוציאה את הקבוצה מהשגרה ומכניסה אותה למשימה אמיתית.',
			),
		);
	}

	ob_start();
	?>
	<section class="evm-content-page-01" dir="rtl">
		<div class="evm-content-page-01__shell">
			<section class="evm-content-page-01__hero evm-hero evm-reveal" data-reveal="fade-up">
				<div class="evm-hero__inner">
					<div class="evm-hero__grid">
						<div class="evm-content-page-01__copy evm-hero__content">
							<p class="evm-content-page-01__eyebrow"><?php echo esc_html( $content['hero']['eyebrow'] ); ?></p>
							<h1 class="evm-content-page-01__headline">
								<span><?php echo esc_html( $content['hero']['headline_lines'][0] ); ?></span>
								<span><?php echo esc_html( $content['hero']['headline_lines'][1] ); ?></span>
								<em><?php echo esc_html( $content['hero']['headline_accent'] ); ?></em>
							</h1>
							<p class="evm-content-page-01__subheadline"><?php echo esc_html( $content['hero']['subheadline'] ); ?></p>
							<div class="evm-content-page-01__actions">
								<a class="evm-content-page-01__button evm-content-page-01__button--primary" href="<?php echo esc_url( $content['hero']['primary_cta_url'] ); ?>">
									<span><?php echo esc_html( $content['hero']['primary_cta_text'] ); ?></span>
									<?php echo evm_content_page_01_icon_html( 'calendar' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
								</a>
								<a class="evm-content-page-01__button evm-content-page-01__button--secondary" href="<?php echo esc_url( $content['hero']['secondary_cta']['url'] ); ?>">
									<span><?php echo esc_html( $content['hero']['secondary_cta']['text'] ); ?></span>
									<?php echo evm_content_page_01_icon_html( 'whatsapp' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
								</a>
							</div>
							<p class="evm-content-page-01__trust-note"><?php echo esc_html( $content['hero']['trust_note'] ); ?></p>
						</div>
						<div class="evm-content-page-01__media evm-hero__media evm-reveal" data-reveal="fade-up">
							<div class="evm-content-page-01__visual" <?php if ( ! empty( $content['hero']['hero_image_url'] ) ) : ?>style="background-image:linear-gradient(180deg, rgba(2,6,4,.18), rgba(2,6,4,.64)), url('<?php echo esc_url( $content['hero']['hero_image_url'] ); ?>');"<?php endif; ?>>
								<div class="evm-content-page-01__maze" aria-hidden="true">
									<span class="evm-content-page-01__maze-line evm-content-page-01__maze-line--1"></span>
									<span class="evm-content-page-01__maze-line evm-content-page-01__maze-line--2"></span>
									<span class="evm-content-page-01__maze-line evm-content-page-01__maze-line--3"></span>
									<span class="evm-content-page-01__maze-node evm-content-page-01__maze-node--cyan"></span>
									<span class="evm-content-page-01__maze-node evm-content-page-01__maze-node--green"></span>
									<span class="evm-content-page-01__maze-node evm-content-page-01__maze-node--red"></span>
								</div>
								<div class="evm-content-page-01__timer">00:17</div>
								<div class="evm-content-page-01__media-frame">
									<div class="evm-content-page-01__media-stage<?php echo $hero_has_native_video || ! empty( $hero_youtube_embed ) ? ' evm-content-page-01__media-stage--has-media' : ''; ?>" aria-label="<?php echo esc_attr( $content['hero']['hero_placeholder']['title'] . ' - ' . $content['hero']['hero_placeholder']['note'] ); ?>" <?php if ( ! empty( $hero_poster_url ) ) : ?>style="background-image:linear-gradient(180deg, rgba(5,11,8,.14), rgba(5,11,8,.66)), url('<?php echo esc_url( $hero_poster_url ); ?>');"<?php endif; ?>>
										<?php if ( $hero_has_native_video ) : ?>
											<video class="evm-content-page-01__hero-video" autoplay muted loop playsinline <?php if ( ! empty( $hero_poster_url ) ) : ?>poster="<?php echo esc_url( $hero_poster_url ); ?>"<?php endif; ?>>
												<?php if ( ! empty( $content['hero']['hero_video_webm_url'] ) ) : ?>
													<source src="<?php echo esc_url( $content['hero']['hero_video_webm_url'] ); ?>" type="video/webm">
												<?php endif; ?>
												<?php if ( ! empty( $content['hero']['hero_video_mp4_url'] ) ) : ?>
													<source src="<?php echo esc_url( $content['hero']['hero_video_mp4_url'] ); ?>" type="video/mp4">
												<?php endif; ?>
											</video>
										<?php elseif ( ! empty( $hero_youtube_embed ) ) : ?>
											<iframe class="evm-content-page-01__hero-youtube" src="<?php echo esc_url( $hero_youtube_embed ); ?>" title="<?php echo esc_attr( $content['hero']['hero_placeholder']['title'] ); ?>" loading="lazy" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>
										<?php endif; ?>
										<div class="evm-content-page-01__media-stage-ambient" aria-hidden="true">
											<span class="evm-content-page-01__media-ring evm-content-page-01__media-ring--1"></span>
											<span class="evm-content-page-01__media-ring evm-content-page-01__media-ring--2"></span>
											<span class="evm-content-page-01__media-route evm-content-page-01__media-route--1"></span>
											<span class="evm-content-page-01__media-route evm-content-page-01__media-route--2"></span>
										</div>
										<?php if ( ! $hero_has_native_video && empty( $hero_youtube_embed ) ) : ?>
											<div class="evm-content-page-01__media-stage-core">
												<div class="evm-content-page-01__media-stage-play"><span></span></div>
											</div>
										<?php endif; ?>
									</div>
								</div>
								<div class="evm-content-page-01__badge">
									<span class="evm-content-page-01__badge-label"><?php echo esc_html( $content['hero']['hero_badge'] ); ?></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="evm-content-page-01__metrics evm-hero__metrics" aria-label="<?php esc_attr_e( 'נתוני אמון מרכזיים', 'evm-content-pages' ); ?>">
					<?php foreach ( $content['hero']['metrics'] as $index => $metric ) : ?>
						<div class="evm-content-page-01__metric evm-reveal" data-reveal="fade-up" style="<?php echo esc_attr( '--evm-delay:' . ( 0.08 * ( $index + 1 ) ) . 's;' ); ?>">
							<div class="evm-content-page-01__metric-content">
								<div class="evm-content-page-01__metric-value"><?php echo esc_html( $metric['value'] ); ?></div>
								<div class="evm-content-page-01__metric-label"><?php echo esc_html( $metric['label'] ); ?></div>
								<div class="evm-content-page-01__metric-detail"><?php echo esc_html( $metric['detail'] ); ?></div>
							</div>
							<div class="evm-content-page-01__icon" aria-hidden="true">
								<?php echo evm_content_page_01_icon_html( $metric['icon'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</section>

			<section class="evm-content-page-01__section evm-content-page-01__section--pain evm-hook-section">
				<div class="evm-hook-section__inner">
					<div class="evm-hook-section__content evm-reveal" data-reveal="fade-up">
						<p class="evm-hook-section__eyebrow"><?php echo esc_html( $content['pain']['eyebrow'] ); ?></p>
						<h2 class="evm-hook-section__title"><?php echo esc_html( $content['pain']['title'] ); ?></h2>
						<p class="evm-hook-section__description"><?php echo esc_html( $content['pain']['description'] ); ?></p>
						<p class="evm-hook-section__supporting-line"><?php echo esc_html( $content['pain']['supporting_line'] ); ?></p>

						<div class="evm-hook-section__mini-grid">
							<?php foreach ( $content['pain']['hook_cards'] as $index => $card ) : ?>
								<article class="evm-hook-section__mini-card evm-reveal" data-reveal="fade-up" style="<?php echo esc_attr( '--evm-delay:' . ( 0.07 * ( $index + 1 ) ) . 's;' ); ?>">
									<div class="evm-hook-section__mini-icon" aria-hidden="true">
										<?php echo evm_content_page_01_icon_html( ! empty( $card['icon'] ) ? $card['icon'] : 'spark' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
									</div>
									<h3 class="evm-hook-section__mini-title"><?php echo esc_html( $card['title'] ); ?></h3>
									<p class="evm-hook-section__mini-text"><?php echo esc_html( $card['text'] ); ?></p>
								</article>
							<?php endforeach; ?>
						</div>
					</div>

					<div class="evm-hook-section__visual evm-reveal" data-reveal="fade-up">
						<div class="evm-hook-section__comparison">
							<div class="evm-hook-section__choice">
								<article class="evm-hook-section__choice-card evm-hook-section__choice-card--boring evm-reveal" data-reveal="fade-up" style="--evm-delay:0.08s;">
									<div class="evm-hook-section__choice-head">
										<span class="evm-hook-section__choice-kicker"><?php echo esc_html( $content['pain']['regular_kicker'] ); ?></span>
										<h3 class="evm-hook-section__choice-title"><?php echo esc_html( $content['pain']['comparison']['regular']['title'] ); ?></h3>
									</div>
									<ul class="evm-hook-section__choice-list">
										<?php foreach ( $content['pain']['comparison']['regular']['items'] as $item ) : ?>
											<li><?php echo esc_html( $item ); ?></li>
										<?php endforeach; ?>
									</ul>
								</article>

								<div class="evm-hook-section__choice-separator evm-reveal" data-reveal="fade-up" style="--evm-delay:0.12s;">
									<span><?php echo esc_html( $content['pain']['comparison_separator'] ); ?></span>
								</div>

								<article class="evm-hook-section__choice-card evm-hook-section__choice-card--gameit evm-reveal" data-reveal="fade-up" style="--evm-delay:0.16s;">
									<div class="evm-hook-section__choice-head">
										<span class="evm-hook-section__choice-kicker"><?php echo esc_html( $content['pain']['gameit_kicker'] ); ?></span>
										<h3 class="evm-hook-section__choice-title"><?php echo esc_html( $content['pain']['comparison']['gameit']['title'] ); ?></h3>
									</div>
									<ul class="evm-hook-section__choice-list">
										<?php foreach ( $content['pain']['comparison']['gameit']['items'] as $item ) : ?>
											<li><?php echo esc_html( $item ); ?></li>
										<?php endforeach; ?>
									</ul>
								</article>
								</div>
						</div>
					</div>
				</div>
			</section>

			<section class="evm-content-page-01__section evm-content-page-01__section--steps">
				<div class="evm-content-page-01__section-copy evm-reveal" data-reveal="fade-up">
					<p class="evm-content-page-01__section-eyebrow"><?php echo esc_html( $content['steps']['eyebrow'] ); ?></p>
					<h2 class="evm-content-page-01__section-title"><?php echo esc_html( $content['steps']['title'] ); ?></h2>
				</div>
				<div class="evm-content-page-01__steps-grid">
					<?php foreach ( $content['steps']['items'] as $index => $step ) : ?>
						<article class="evm-content-page-01__step-card evm-reveal" data-reveal="fade-up" style="<?php echo esc_attr( '--evm-delay:' . ( 0.08 * ( $index + 1 ) ) . 's;' ); ?>">
							<div class="evm-content-page-01__step-number"><?php echo esc_html( $step['number'] ); ?></div>
							<h3><?php echo esc_html( $step['title'] ); ?></h3>
							<p><?php echo esc_html( $step['description'] ); ?></p>
						</article>
					<?php endforeach; ?>
				</div>
			</section>

			<section class="evm-content-page-01__section evm-content-page-01__section--featured-room">
				<div class="evm-content-page-01__featured-room-grid">
					<div class="evm-content-page-01__featured-room-copy evm-reveal" data-reveal="fade-up">
						<p class="evm-content-page-01__section-eyebrow"><?php echo esc_html( $content['visual_experience']['eyebrow'] ); ?></p>
						<h2 class="evm-content-page-01__section-title evm-content-page-01__featured-room-title"><?php echo esc_html( $content['visual_experience']['title'] ); ?></h2>
						<p class="evm-content-page-01__featured-room-subtitle"><?php echo esc_html( $content['visual_experience']['subtitle'] ); ?></p>

						<div class="evm-content-page-01__featured-room-body">
							<?php foreach ( $content['visual_experience']['body'] as $paragraph ) : ?>
								<p><?php echo esc_html( $paragraph ); ?></p>
							<?php endforeach; ?>
						</div>

						<div class="evm-content-page-01__featured-room-actions">
							<a class="evm-content-page-01__button evm-content-page-01__button--primary" href="<?php echo esc_url( $content['visual_experience']['primary_cta_url'] ); ?>">
								<?php echo evm_content_page_01_icon_html( 'calendar' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
								<span><?php echo esc_html( $content['visual_experience']['primary_cta_text'] ); ?></span>
							</a>
							<a class="evm-content-page-01__button evm-content-page-01__button--ghost" href="<?php echo esc_url( $content['visual_experience']['secondary_cta_url'] ); ?>" target="_blank" rel="noopener">
								<?php echo evm_content_page_01_icon_html( 'whatsapp' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
								<span><?php echo esc_html( $content['visual_experience']['secondary_cta_text'] ); ?></span>
							</a>
						</div>
					</div>

					<div class="evm-content-page-01__featured-room-media evm-reveal" data-reveal="fade-up">
						<div class="evm-content-page-01__room-frame<?php echo ( $room_has_native_video || ! empty( $room_youtube_embed ) ) ? ' evm-content-page-01__room-frame--has-media' : ''; ?>">
							<span class="evm-content-page-01__room-orbit evm-content-page-01__room-orbit--green" aria-hidden="true"></span>
							<span class="evm-content-page-01__room-orbit evm-content-page-01__room-orbit--purple" aria-hidden="true"></span>
							<span class="evm-content-page-01__room-hud evm-content-page-01__room-hud--top" aria-hidden="true"></span>
							<span class="evm-content-page-01__room-hud evm-content-page-01__room-hud--bottom" aria-hidden="true"></span>
							<span class="evm-content-page-01__room-red-dot" aria-hidden="true"></span>
							<div class="evm-content-page-01__room-timer">00:17</div>

							<div class="evm-content-page-01__room-screen">
								<?php if ( $room_has_native_video ) : ?>
									<video class="evm-content-page-01__room-video" autoplay muted loop playsinline <?php echo ! empty( $room_poster_url ) ? 'poster="' . esc_url( $room_poster_url ) . '"' : ''; ?>>
										<?php if ( ! empty( $content['visual_experience']['villains_room_video_webm_url'] ) ) : ?>
											<source src="<?php echo esc_url( $content['visual_experience']['villains_room_video_webm_url'] ); ?>" type="video/webm">
										<?php endif; ?>
										<?php if ( ! empty( $content['visual_experience']['villains_room_video_mp4_url'] ) ) : ?>
											<source src="<?php echo esc_url( $content['visual_experience']['villains_room_video_mp4_url'] ); ?>" type="video/mp4">
										<?php endif; ?>
									</video>
								<?php elseif ( ! empty( $room_youtube_embed ) ) : ?>
									<iframe class="evm-content-page-01__room-youtube" src="<?php echo esc_url( $room_youtube_embed ); ?>" title="<?php echo esc_attr( $content['visual_experience']['media_title'] ); ?>" allow="autoplay; encrypted-media; picture-in-picture" loading="lazy"></iframe>
								<?php else : ?>
									<div class="evm-content-page-01__room-placeholder">
										<span><?php echo esc_html( $content['visual_experience']['media_eyebrow'] ); ?></span>
										<strong><?php echo esc_html( $content['visual_experience']['media_title'] ); ?></strong>
										<em><?php echo esc_html( $content['visual_experience']['media_note'] ); ?></em>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>

				<div class="evm-content-page-01__featured-room-cards">
					<?php foreach ( $content['visual_experience']['feature_cards'] as $index => $card ) : ?>
						<div class="evm-content-page-01__featured-room-card evm-reveal" data-reveal="fade-up" style="<?php echo esc_attr( '--evm-delay:' . ( 0.07 * ( $index + 1 ) ) . 's;' ); ?>">
							<div class="evm-content-page-01__featured-room-card-icon" aria-hidden="true">
								<?php echo evm_content_page_01_icon_html( $card['icon'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</div>
							<div class="evm-content-page-01__featured-room-card-copy">
								<h3><?php echo esc_html( $card['title'] ); ?></h3>
								<p><?php echo esc_html( $card['text'] ); ?></p>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</section>

			<section class="evm-content-page-01__section evm-content-page-01__section--experiences">
				<div class="evm-content-page-01__section-copy evm-reveal" data-reveal="fade-up">
					<p class="evm-content-page-01__section-eyebrow"><?php echo esc_html( $content['experiences']['eyebrow'] ); ?></p>
					<h2 class="evm-content-page-01__section-title"><?php echo esc_html( $content['experiences']['title'] ); ?></h2>
				</div>
				<div class="evm-content-page-01__experience-grid">
					<?php foreach ( $content['experiences']['items'] as $index => $item ) : ?>
						<article class="evm-content-page-01__experience-card evm-reveal" data-reveal="fade-up" style="<?php echo esc_attr( '--evm-delay:' . ( 0.07 * ( $index + 1 ) ) . 's;' ); ?>">
							<div class="evm-content-page-01__icon evm-content-page-01__icon--large" aria-hidden="true">
								<?php echo evm_content_page_01_icon_html( $item['icon'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</div>
							<h3><?php echo esc_html( $item['title'] ); ?></h3>
							<p><?php echo esc_html( $item['description'] ); ?></p>
						</article>
					<?php endforeach; ?>
				</div>
			</section>

			<section class="evm-content-page-01__section evm-content-page-01__section--why">
				<div class="evm-content-page-01__section-copy evm-reveal" data-reveal="fade-up">
					<p class="evm-content-page-01__section-eyebrow"><?php echo esc_html( $content['why']['eyebrow'] ); ?></p>
					<h2 class="evm-content-page-01__section-title"><?php echo esc_html( $content['why']['title'] ); ?></h2>
				</div>
				<div class="evm-content-page-01__benefits-grid">
					<?php foreach ( $content['why']['items'] as $index => $benefit ) : ?>
						<article class="evm-content-page-01__benefit-card evm-reveal" data-reveal="fade-up" style="<?php echo esc_attr( '--evm-delay:' . ( 0.07 * ( $index + 1 ) ) . 's;' ); ?>">
							<div class="evm-content-page-01__icon" aria-hidden="true">
								<?php echo evm_content_page_01_icon_html( $benefit['icon'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</div>
							<h3><?php echo esc_html( $benefit['title'] ); ?></h3>
							<p><?php echo esc_html( $benefit['description'] ); ?></p>
						</article>
					<?php endforeach; ?>
				</div>
			</section>

			<section class="evm-content-page-01__section evm-content-page-01__section--stats">
				<div class="evm-content-page-01__stats">
					<?php foreach ( $content['stats'] as $index => $stat ) : ?>
						<div class="evm-content-page-01__stat evm-reveal" data-reveal="fade-up" style="<?php echo esc_attr( '--evm-delay:' . ( 0.08 * ( $index + 1 ) ) . 's;' ); ?>">
							<div class="evm-content-page-01__icon" aria-hidden="true">
								<?php echo evm_content_page_01_icon_html( $stat['icon'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</div>
							<div class="evm-content-page-01__stat-content">
								<div class="evm-content-page-01__stat-value" data-count-value="<?php echo esc_attr( $stat['numeric'] ); ?>" data-count-display="<?php echo esc_attr( $stat['value'] ); ?>"><?php echo esc_html( $stat['value'] ); ?></div>
								<div class="evm-content-page-01__stat-label"><?php echo esc_html( $stat['label'] ); ?></div>
								<div class="evm-content-page-01__stat-description"><?php echo esc_html( $stat['description'] ); ?></div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</section>

			<section class="evm-content-page-01__section evm-content-page-01__section--faq">
				<div class="evm-content-page-01__section-copy evm-reveal" data-reveal="fade-up">
					<p class="evm-content-page-01__section-eyebrow"><?php echo esc_html( $content['faq']['eyebrow'] ); ?></p>
					<h2 class="evm-content-page-01__section-title"><?php echo esc_html( $content['faq']['title'] ); ?></h2>
				</div>
				<div class="evm-content-page-01__faq-list">
					<?php foreach ( $content['faq']['items'] as $index => $faq ) : ?>
						<details class="evm-content-page-01__faq-item evm-reveal" data-reveal="fade-up" style="<?php echo esc_attr( '--evm-delay:' . ( 0.06 * ( $index + 1 ) ) . 's;' ); ?>"<?php echo 0 === $index ? ' open' : ''; ?>>
							<summary>
								<span><?php echo esc_html( $faq['question'] ); ?></span>
								<i class="evm-content-page-01__faq-icon" aria-hidden="true"><?php echo evm_content_page_01_icon_html( 'question' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></i>
							</summary>
							<p><?php echo esc_html( $faq['answer'] ); ?></p>
						</details>
					<?php endforeach; ?>
				</div>
			</section>

			<section class="evm-content-page-01__section evm-content-page-01__section--final-cta evm-reveal" data-reveal="fade-up">
				<div class="evm-content-page-01__final-cta">
					<p class="evm-content-page-01__section-eyebrow"><?php echo esc_html( $content['final_cta']['eyebrow'] ); ?></p>
					<h2 class="evm-content-page-01__section-title"><?php echo esc_html( $content['final_cta']['title'] ); ?></h2>
					<p class="evm-content-page-01__section-description"><?php echo esc_html( $content['final_cta']['description'] ); ?></p>
					<div class="evm-content-page-01__actions">
						<a class="evm-content-page-01__button evm-content-page-01__button--primary" href="<?php echo esc_url( $content['final_cta']['primary_cta_url'] ); ?>">
							<span><?php echo esc_html( $content['final_cta']['primary_cta_text'] ); ?></span>
							<?php echo evm_content_page_01_icon_html( 'calendar' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</a>
						<a class="evm-content-page-01__button evm-content-page-01__button--secondary" href="<?php echo esc_url( $content['final_cta']['secondary_cta_url'] ); ?>">
							<span><?php echo esc_html( $content['final_cta']['secondary_cta_text'] ); ?></span>
							<?php echo evm_content_page_01_icon_html( 'whatsapp' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</a>
					</div>
				</div>
			</section>
		</div>
	</section>
	<?php

	return (string) ob_get_clean();
}


