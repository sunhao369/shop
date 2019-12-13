@include("Layouts.header")
@include("Layouts.body")
    <!--会员内容 -->
    <div class="qing juzhong" style="width:900px;">


      <div style="width:900px; line-height:40px; background:#e01222; color:#FFF; font-size:16px; padding-left:15px;">收货地址</div>


      <div class="qing juzhong" style="width:900px;">
        <div class="cenbg" style="margin-bottom:40px;">
          <div class="addk">
            <a href="my-address-add.php" class="add">
              <div class=" add-tj"><img src="/index/images/dizhi_03.png" width="39" height="39">添加新地址</div>
            </a>
            <div class="address_li add" id="div_address_id_41">
              <div class="ad-m">某某某</div>
              <div class="ad-js">
                1805380xxxx<br>
                山东省 泰安市 泰山区<br>
                泰山大街圣地公寓A座0855<br>
              </div>
              <div class="ad-bj">
                <a href="my-address-edit.php?id=41">修改</a><a href="javascript:del_address('41');">删除</a>
              </div>
            </div>
            <div class="address_li add" onclick="change_address('41');">
              <div class="ad-m">某某某</div>
              <div class="ad-js">
                1805380xxxx<br>
                山东省 泰安市 泰山区<br>
                泰山大街圣地公寓A座0855<br>
              </div>
              <div class="ad-bj">
                <a href="my-address-edit.php?id=41">修改</a><a href="javascript:del_address('41');">删除</a>
              </div>
            </div>
            <div class="address_li add" id="div_address_id_41" onclick="change_address('41');">
              <div class="ad-m">某某某</div>
              <div class="ad-js">
                1805380xxxx<br>
                山东省 泰安市 泰山区<br>
                泰山大街圣地公寓A座0855<br>
              </div>
              <div class="ad-bj">
                <a href="my-address-edit.php?id=41">修改</a><a href="javascript:del_address('41');">删除</a>
              </div>
            </div>
            <div class="address_li add" id="div_address_id_41" onclick="change_address('41');">
              <div class="ad-m">某某某</div>
              <div class="ad-js">
                1805380xxxx<br>
                山东省 泰安市 泰山区<br>
                泰山大街圣地公寓A座0855<br>
              </div>
              <div class="ad-bj">
                <a href="my-address-edit.php?id=41">修改</a><a href="javascript:del_address('41');">删除</a>
              </div>
            </div>
          </div>

          <!--页码 -->
          <div class="qing yema">
            <table border="0" cellspacing="0" cellpadding="0">
              <tbody>
              <tr>
                <td>
                  <a href="#" class="sye"></a>
                  <a href="#" class="yeen"><span>1</span><span>1</span></a>
                  <a href="#" class="xye"></a>
                </td>
              </tr>
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>


  </div>

  @include("Layouts.left")


</div>

@include("Layouts.footer")