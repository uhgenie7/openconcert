            <form action="/openconcert/page/perform/perform_search_result.php" method="get" name="performSearch" class="search-box">
              <div class="select-box">
                <!-- <label for="search" class="search-label">전체</label> -->
                <span for="search" class="ser-arrow"></span>
                <select name="findType" class="find-type" id="search">
                  <option value="all">전체</option>
                  <option value="title">제목</option>
                  <option value="content">내용</option>
                </select>
              </div>
              <div class="perform__search">
                <input type="text" placeholder="검색어를 입력해주세요." name="findWord" class="find-word" spellcheck="false">
                <span class="search"></span>
                <input type="submit" class="search-btn" value>
              </div>
            </form>