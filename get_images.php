<?php
include_once('connection.php');

$collect_comm =  connect("places")->prepare("SELECT * FROM avaible_places");
$collect_comm->execute();
$rows = $collect_comm->fetchAll();
?>

<script type="text/javascript">
	let rows = <?php echo json_encode($rows); ?>;
	console.log(rows);
	let part_sec = document.getElementsByClassName("section-tours")[0];
	let last_row;
	let colors = [['#ffb900', '#ff7730'], ['#7ed56f', '#28b485'], ['#2998ff', '#5643fa']];
	for (let i = 0; i < rows.length; i += 1){
		if (i % 3 == 0){
			last_row = document.createElement("div");
			last_row.classList.add("row");
			part_sec.appendChild(last_row);
		}
		let col = document.createElement("div");
		col.classList.add("col-1-of-3");

		let card_el = document.createElement("div");
		card_el.classList.add("card");

		let front_card_el = document.createElement("div");
		front_card_el.classList.add("card__side");
		front_card_el.classList.add("card__side--front");

		let picture_sec = document.createElement("div");
		picture_sec.classList.add("card__picture");
		picture_sec.style.backgroundImage = "linear-gradient(to right bottom,"+ colors[i % 3][0] + "," + colors[i % 3][1] +")" + ",url("+rows[i]['img_path']+")";
		front_card_el.appendChild(picture_sec);

		let caption_head = document.createElement("h4");
		caption_head.classList.add("card__heading");
		let span_val = document.createElement("span");
		span_val.classList.add("card__heading-span");
		span_val.classList.add("card__heading-span--"+String((i % 3) + 1));
		span_val.textContent = rows[i]['caption'];
		caption_head.appendChild(span_val);

		front_card_el.appendChild(caption_head);

		let card_details = document.createElement("div");
		card_details.classList.add("card__details");
		let info = document.createElement("ul");
		let info_li = document.createElement("li");
		info_li.textContent = rows[i]['place_name'];
		info.appendChild(info_li);
		card_details.appendChild(info);
		front_card_el.appendChild(card_details);
		card_el.appendChild(front_card_el);

		let back_card_el = document.createElement("div");
		back_card_el.classList.add("card__side");
		back_card_el.classList.add("card__side--back");
		back_card_el.classList.add("card__side--back-"+String((i % 3) + 1));

		let card_cta = document.createElement("div");
		card_cta.classList.add("card__cta");

		let price_box = document.createElement("div");
		price_box.classList.add("card__price-box");

		let p_only = document.createElement("p");
		p_only.classList.add("card__price-only");
		p_only.textContent = "Only";
		price_box.appendChild(p_only);

		let p_price = document.createElement("p");
		p_price.classList.add("card__price-value");
		p_price.textContent = '\u20B9 ' +String(rows[i]['cost']);
		price_box.appendChild(p_price);
		
		card_cta.appendChild(price_box);

		let ref = document.createElement("a");
		ref.href = "#popup";
		ref.classList.add("btn");
		ref.classList.add("btn--white");
		ref.textContent = "Buy now";
		card_cta.appendChild(ref);

		back_card_el.appendChild(card_cta);
		card_el.appendChild(back_card_el);
		col.appendChild(card_el);
		last_row.appendChild(col);
	}
</script>