$(function () {
  let count = 4;
  let addData = 0;
  let allData = [];

  // $(".appBoxes").masonry({
  //   // options
  //   itemSelector: ".appBox",
  //   columnWidth: ".appBox-sizer",
  //   percentPosition: true,
  // });

  $.getJSON("/openconcert/data/json/perform.json", initData);

  function initData(data) {
    allData = data;
    addData();

    $(".loadMore").on("click", addData);
  }

  function addData() {
    // e.preventDefault();
    // console.log(data[0].appclient);
    let items = [];
    let slicedData = allData.slice(addData, addData + count);
    $.each(slicedData, function (i, item) {
      let itemHTML = `<div class="appBox">
                      <div>
                        <img src="/openconcert/data/perform_page/app_thumb/${item.perimg}" alt="${item.pertitle}">
                        <h2>${item.pertitle}</h2>
                        <a href="/openconcert/page/perform/preview.php?num=${item.pernum}">미리보기</a>
                      </div>
                    </div>`;
      items.push($(itemHTML).get(0));
    });
    $(".appBoxes").append(items);

    addData += slicedData.length;
  }
});
