
$(function () {
  let count = 3;
  let addData = 0;
  let allData = [];

  $.getJSON("/openconcert/data/json/perform.json", initData);
  // $.getJSON("/openconcert/data/json/perform.json", initData);


  function initData(data) {
    allData = data;
    addAppData();
    $(".loadMore").on("click", addAppData);
  }

  function addAppData() {
    let items = [];
    let slicedData = allData.slice(addData, addData + count);
    $.each(slicedData, function (i, item) {
      let itemHTML = `<li class="perform__list">
                        <div class="perform__imgbox">
                          <img src="/openconcert/data/perform_page/perform_img/${item.perimg}" alt="${item.pertitle}">
                        </div>
                        <div class="perform__des">
                          <h3>${item.pertitle}</h3>
                          <p>${item.perthumb}</p>
                          <div class="perform__more">
                            <button class="perform-preview" onClick="alert('준비중입니다')">미리보기</button>
                            <button class="perform-buy" onClick="alert('준비중입니다')">결제하기</button>
                          </div>
                        </div>
                      </li>`;
      items.push($(itemHTML).get(0));
    });
    $(".perform__lists").append(items);
    addData += slicedData.length;
  }
});





// $(function () {
//   // 초기화
//   let count = 3;
//   let addData = 0;
//   let allData = [];
//   $.ajax({
//     url: "/openconcert/data/json/perform.json",
//     success: function (data) {
//       console.log(data);
//       let items = `
//                           <div class="movieImg">
//                               <img src="${detailData.data.movie.medium_cover_image}" alt="" onError="this.src='/movie_api/img/replace.jpg';" />
//                             </div>
//                             <div class="movieTxt">
//                               <h2 class="movieTitle">${detailData.data.movie.title_long}</h2>
//                               <h3 class="movieGenre"><span>장르:</span> ${detailData.data.movie.genres.join(', ')}</h3>
//                               <h3><span>시놉시스:</span> </h3>
//                               <p class="movieDes">${detailData.data.movie.description_full}</p>
//                               <h3 class="movieRate"><span>평점:</span> ${detailData.data.movie.rating}</h3>
//                               <h3><span>좋아요:</span> ${detailData.data.movie.like_count}</h3>
//                             </div>
//                         `;
//       $(".perform__lists").append(items);
//     }
//   })
// })
