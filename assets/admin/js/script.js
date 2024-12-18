//****************slider home page script

$(".editbtn").click(function () {
	// alert();
	$("#editModalId").val($(this).attr("data-id"));

	$("#editModalLaptopImage").attr(
		"src",

		$(this).parent().parent().parent().find(".LaptopBanner").attr("src")
	);

	$("#editModalTabletImage").attr(
		"src",

		$(this).parent().parent().parent().find(".TabletBanner").attr("src")
	);

	$("#editModalMobileImage").attr(
		"src",

		$(this).parent().parent().parent().find(".MobileBanner").attr("src")
	);
});

$(".deletebtn").click(function () {
	$("#deleteModalId").val($(this).attr("data-id"));
});

//****************wayam salagar Home & About by Aishwarya

$(".salagareditbtn").click(function () {
	
	$("#editModalIdw").val($(this).attr("data-id"));
	// $("#editModalIdw").val('123');

	$("#salagar_image").attr(
		"src",
		$(this)
			.parent()
			.parent()
			.parent()
			.find(".salagar_image_class")
			.attr("src")
	);
	var title = $(this)
		.parent()
		.parent()
		.parent()
		.find(".salagar_title")
		.attr("wtitle");
	$("#editModalTitleSalagar").val(title); 
	// alert(title);
	var description = $(this)
		.parent()
		.parent()
		.parent()
		.find(".salagar_desc")
		.attr("wdesc");
	$("#editModalDescSalagar").val(description);
});

$(".salagardeletebtn").click(function () {
	$("#deleteModalIdSalagar").val($(this).attr("data-id"));
});

//****************wayam sahitik About by Aishwarya

$(".sahitikeditbtn").click(function () {
	
$("#editModalIdw").val($(this).attr("data-id"));
	// $("#editModalIdw").val('123');

$("#sahitik_image").attr(
		"src",
		$(this)
			.parent()
			.parent()
			.parent()
			.find(".sahitik_image_class")
			.attr("src")
	);
	var title = $(this)
		.parent()
		.parent()
		.parent()
		.find(".sahitik_title")
		.attr("wtitle");
	$("#editModalTitlesahitik").val(title); 
	// alert(title);
	var description = $(this)
		.parent()
		.parent()
		.parent()
		.find(".sahitik_desc")
		.attr("wdesc");
	$("#editModalDescsahitik").val(description);
});

$(".sahitikdeletebtn").click(function () {
	$("#deleteModalIdsahitik").val($(this).attr("data-id"));
});

// Award
$(".awardeditbtn").click(function () {
	
	$("#editModalId").val($(this).attr("data-id"));
		// $("#editModalIdw").val('123');
	
	$("#image").attr(
			"src",
			$(this)
				.parent()
				.parent()
				.parent()
				.find(".image_class")
				.attr("src")
		);
		var title = $(this)
			.parent()
			.parent()
			.parent()
			.find(".title")
			.attr("title");
		$("#editModalTitle").val(title); 
		// alert(title);
		var description = $(this)
			.parent()
			.parent()
			.parent()
			.find(".description")
			.attr("description");
		$("#editModalDescription").val(description);
	});
	
	$(".awarddeletebtn").click(function () {
		$("#deleteModalIdAward").val($(this).attr("data-id"));
	});

//****************wayam madhe kay wachal home page script Aishwarya

$(".weditbtn").click(function () {
	// alert($("#editModalIdw").val($(this).attr("data-id")));
	$("#editModalIdw").val($(this).attr("data-id"));
	// $("#editModalIdw").val('123');

	$("#wayam_madhe_kay_wachal_image").attr(
		"src",
		$(this)
			.parent()
			.parent()
			.parent()
			.find(".wayam_madhe_kay_wachal_image_class")
			.attr("src")
	);
	var title = $(this)
		.parent()
		.parent()
		.parent()
		.find(".kywachal_title")
		.attr("wtitle");
	$("#editModalTitlew").val(title);
});

$(".wdeletebtn").click(function () {
	$("#deleteModalIdw").val($(this).attr("data-id"));
});

//********************* */ About Wayam home page  by Aishwarya
$(".about_wayam_editbtn").click(function () {
	// alert(title);
	$("#editModalId_about_wayam").val($(this).attr("data-id"));
	// $("#editModalIdw").val('123');

	$("#about_wayam_image").attr(
		"src",
		$(this)
			.parent()
			.parent()
			.parent()
			.find(".about_wayam_image_class")
			.attr("src")
	);
	var title = $(this)
		.parent()
		.parent()
		.parent()
		.find(".about_wayam_title")
		.attr("wtitle");
	$("#editModalTitlew").val(title);
	var description = $(this)
		.parent()
		.parent()
		.parent()
		.find(".about_wayam_description")
		.attr("wtitle");
	$("#editModalDescription").val(description);
});
// editModalDescription;

$(".about_wayam_deletebtn").click(function () {
	$("#deleteModalId_About_wayam").val($(this).attr("data-id"));
});


//********************* */ Contact details ContactUS page  by Aishwarya
$(".contacteditbtn").click(function () {
	// alert("contacteditbtntitle");
	$("#editModalId_contactUs").val($(this).attr("data-id"));
	// $("#editModalIdw").val('123')

	var email = $(this)
		.parent()
		.parent()
		.parent()
		.find(".contact_email")
		.attr("wemail");
	$("#editModalEmail").val(email);

	var phone = $(this)
		.parent()
		.parent()
		.parent()
		.find(".contact_phone")
		.attr("wphone");
	$("#editModalphone1").val(phone);

	var phone2 = $(this)
		.parent()
		.parent()
		.parent()
		.find(".contact_phone2")
		.attr("wphone2");
	$("#editModalphone2").val(phone2);

	var address = $(this)
		.parent()
		.parent()
		.parent()
		.find(".contact_address")
		.attr("waddress");
	$("#editModalAddress").val(address);
});


//********************* */ About Wayam Aboutus page  by Aishwarya
$(".about_wayam_editbtn_about").click(function () {
	// alert(title);
	$("#editModalId_about_wayam").val($(this).attr("data-id"));
	// $("#editModalIdw").val('123');

	$("#about_wayam_image").attr(
		"src",
		$(this)
			.parent()
			.parent()
			.parent()
			.find(".about_wayam_image_class")
			.attr("src")
	);

	var description = $(this)
		.parent()
		.parent()
		.parent()
		.find(".about_wayam_description")
		.attr("wtitle");
	$("#editModalDescription").val(description);
});
// editModalDescription;

// $(".about_wayam_deletebtn").click(function () {
// 	$("#deleteModalId_About_wayam").val($(this).attr("data-id"));
// });


//******************** */ About Bapat Sir home page
$(".about_bapat_sir_editbtn123").click(function () {
	$("#editModalId_about_bapat_sir").val($(this).attr("data-id"));
	// alert($(this).attr("data-id"));
	// $("#editModalIdw").val('123');

	$("#bapat_sir_image").attr(
		"src",
		$(this)
			.parent()
			.parent()
			.parent()
			.find(".bapat_sir_image_class")
			.attr("src")
	);
	// alert($(this).parent().parent().parent().find(".bapat_sir_image_class").attr("src"));
	var title = $(this)
		.parent()
		.parent()
		.parent()
		.find(".bapat_sir_name")
		.attr("wtitle");
	$("#bapat_sir_name").val(title);
	var aboutSir = $(this)
		.parent()
		.parent()
		.parent()
		.find(".bapat_sir_description")
		.attr("wdescription");
	$("#editAboutBapatSir").val(aboutSir);
});
// editModalDescription

$(".about_bapat_sir").click(function () {
	$("#deleteModalId_About_bapat_sir").val($(this).attr("data-id"));
});


//***************** */ blog page script

$(".blogdeletebtn").click(function () {
	var id = $(this).attr("data-id");

	$("#blogdeleteModalId").val(id);
});

// *****************blogcategory page script

$(".blogcategoryeditbtn").click(function () {
	// disable summernote first

	$(".editModalDescription").summernote("destroy");

	var id = $(this).attr("data-id");

	var image = $(this)
		.parent()

		.parent()

		.parent()

		.find(".categoryImage")

		.attr("src");

	var banner = $(this)
		.parent()

		.parent()

		.parent()

		.find(".categoryBanner")

		.attr("src");

	var name = $(this).parent().parent().parent().find(".categoryName").text();

	var url_name = $(this)
		.parent()
		.parent()
		.parent()
		.find(".categoryUrlName")
		.text();

	var description = $(this)
		.parent()

		.parent()

		.parent()

		.find(".categoryDescription")

		.attr("data-content");

	// 	console.log(id,image,banner,name,description)

	$("#blogeditModalId").val($(this).attr("data-id"));

	$("#blogeditModalImage").attr(
		"src",

		image
	);

	$("#blogeditModalBanner").attr("src", banner);

	$(".editModalname").val(name);

	$(".editModalUrlname").val(url_name);

	$(".editModalDescription").text(description);

	// 	enable summernote again

	$(".editModalDescription").summernote();
});

// ******************event page script

$(".eventeditbtn").click(function () {
	$("#blogeditModalId").val($(this).attr("data-id"));

	$("#blogeditModalImage").attr(
		"src",

		$(this).parent().parent().parent().find("img").attr("src")
	);

	$(".editModalTitle").val(
		$(this).parent().parent().parent().find(".title").text()
	);

	$(".editModalDescription").html(
		$(this).parent().parent().parent().find(".description").text()
	);

	$(".editModaleventDate").val(
		$(this).parent().parent().parent().find(".eventDate").attr("data-date")
	);
});

//****************BB Hero video section

$(".bbeditbtn").click(function () {
	// alert();
	$("#editModalbbId").val($(this).attr("data-id"));

	$(".video_title_class").click(function () {
		$("#editbbTitle").val($(this).attr("videotitle"));
	});

	var video_title = $(this)
		.parent()
		.parent()
		.parent()
		.find(".video_title_class")
		.attr("videotitle");
	$("#editbbTitle").val(video_title);

	var bbVideo1 = $(this)
		.parent()
		.parent()
		.parent()
		.find(".bb_video_class1")
		.attr("video1");
	$("#editbbVideo1").val(bbVideo1);
	var bbVideo2 = $(this)
	.parent()
	.parent()
	.parent()
	.find(".bb_video_class2")
	.attr("video2");
$("#editbbVideo2").val(bbVideo2);

var bb_title = $(this)
	.parent()
	.parent()
	.parent()
	.find(".bb_title_class")
	.attr("bb_title");
$("#editUdhishtya").val(bb_title);

var bb_desc = $(this)
	.parent()
	.parent()
	.parent()
	.find(".bb_description_class")
	.attr("bb_desc");
$("#editUdhishtyaD").val(bb_desc);


});

// FAQ

$(".FAQeditbtn").click(function () {
	
	$("#editModalFAQ").val($(this).attr("data-id"));
	// $("#editModalIdw").val('123');
	var question = $(this)
		.parent()
		.parent()
		.parent()
		.find(".question_class")
		.attr("question");
	$("#editModalQuestion").val(question); 
	// alert(title);
	var answer = $(this)
		.parent()
		.parent()
		.parent()
		.find(".answer_class")
		.attr("answer");
	$("#editModalAnswer").val(answer);
});

$(".FAQdeletebtn").click(function () {
	$("#deleteModalIdFAQ").val($(this).attr("data-id"));
});








// editOrderModalside
// Why to participet in BB
$(".Pointeditbtn").click(function () {
	
	$("#editModalId").val($(this).attr("data-id"));
	// $("#editModalIdw").val('123');
	var points = $(this)
		.parent()
		.parent()
		.parent()
		.find(".point_class")
		.attr("points");
	$("#editModalPoint").val(points); 
	// alert(title);
});

$(".Pointdeletebtn").click(function () {
	$("#deleteModalPointId").val($(this).attr("data-id")); 
});