
        var product = [];
        var motasp = [];
        var anhh = [];
        var gia = [];
        var index;
        function ht_sp() {
          return location.reload();
        }
        var k
        function timkiem_sp() {
          var timkk = product.includes(document.getElementById("timkiem").value);
          if (timkk) {
            
            for ( k = 0; k < product.length; k++) {
            
              if (document.getElementById("timkiem").value ==  product[k]) {
                let a;
                a =
                  "<table cellspacing='4px' cellpadding='' width='1500px'>";
                a +=
                  "<td style='text-align:center' id='prd' width='300px'>" +
                  product[k] +
                  "</td>";
                  a +=
                  "<td style='text-align:center' id='prd'  width='100px'>" +
                  gia[k] +'<br>VNĐ'
                  "</td>";
                a +=
                  "<td style='text-align:center' id='texta' width='700px' height='50 px' >" +
                  motasp[k] +
                  " </td>";
                  a += '<td><img width="200px" height="200px" src=" '+anhh[k]+'"></td>'
                  a +=
                  "<td style='text-align: left' id='td1' width='30px'> <input id='csmota' type='button' value='Chỉnh sửa' onclick='chinhsuamt(" +
                  i +
                  ")'><br><br><br><input  id='cst' type='button' value='Lưu' onclick='update(" +
                  i +
                  ")' ><br><br><br><input  id='csmt' type='button' value='Xóa' onclick='dele(" +
                  i +
                  ")'>(" +
                  (k + 1) +
                  ")</td>"
  
                a = a + "</table>";
                document.getElementById("bang1").innerHTML = a;
                hienthisl(k+1)
               
              }
            }
          } else if (document.getElementById("timkiem").value !="") {
            alert(
              "Sản phẩm " +
                "'" +
                document.getElementById("timkiem").value +
                "'" +
                " không tồn tại trong danh sách"
                
            );
            bang(product);
          }
          else {
            alert("Vui lòng nhập tên sản phẩm")
            bang(product);
          }
        }
      var add0 =  document.getElementById("addd")
      add0.disabled = true
      var chinhsua0 =  document.getElementById("delete1")
      chinhsua0.disabled = true
      var timkiem0 =  document.getElementById("timkiem1")
      timkiem0.disabled = true
      function add01(){
        div.style.display = 'block';
        add0.disabled = false
        chinhsua0.disabled = false
        timkiem0.disabled = false
      }
      function offmota(){
        div.style.display = 'none';
      }
        function them_sp() {
          var add = document.getElementById("newProduct").value;
          var mota = document.getElementById("motasp").value;
          let img =  document.getElementById('img').value;
          let gia1 = document.getElementById("Gia").value;
          if (add != "") {
            if (!product.includes(add)) {
              product.push(add);
              motasp.push(mota);
              anhh.push(img);
              gia.push(gia1);
              bang(product);
              document.getElementById("newProduct").value = "";
              document.getElementById("motasp").value = "";
            document.getElementById('img').value = "";
            document.getElementById('Gia').value = "";
            } else {
              alert(
                "CẢNH BÁO: Sản Phẩm: " +
                  "'" +
                  add +
                  "'" +
                  " Đã Tồn Tại Vui Lòng Đặt Tên Khác"
              );
            }
          } else {
            alert("Vui lòng nhập tên sản phẩm");
          }
        }
        var a, i
        // var anh = document.getElementById("img").value
        function bang(product) {
          a = "<table cellspacing='4px' cellpadding='' width='1500px'>";
          for (i = 0; i < product.length; i++) {
            a +=
              "<td style='text-align:center' id='prd'  width='300px'>" +
              product[i] +
              "</td>";
              a +=
              "<td style='text-align:center' id='prd'  width='100px'>" +
          gia[i] +'<br>VNĐ'
              "</td>";
              a +=
              "<td style='text-align:center' id='texta' width='700px' height='50 px' >" +
              motasp[i] +
              " </td>";
              a += '<td><img width="250px" height="200px" src=" '+anhh[i]+'"></td>'
            a +=
              "<td style='text-align: left' id='td1' width='30px'> <input id='csmota' type='button' value='Chỉnh sửa' onclick='chinhsuamt(" +
              i +
              ")'><br><br><br><input  id='cst' type='button' value='Lưu' onclick='update(" +
              i +
              ")' ><br><br><br><input  id='csmt' type='button' value='Xóa' onclick='dele(" +
              i +
              ")'>(" +
              (i + 1) +
              ")</td>";



            //   a +=
            //       "<td style='text-align:center' id='td1' width='60px'> <input  id='cst' type='button' value='Lưu' onclick='update(" +
            //       i +
            //       ")' ></td>";
            // a +=
            //   "<td style='text-align:center' id='td1' width='70px'> <input  id='csmt' type='button' value='Xóa' onclick='dele(" +
            //   i +
            //   ")'>(" +
            //   (i + 1) +
            //   ")</td>";




            a = a + "</tr>";
          }
          a = a + "</table>";

          document.getElementById("bang1").innerHTML = a;
          localStorage.setItem("product", JSON.stringify(product));
          localStorage.setItem("motasp", JSON.stringify(motasp));
          localStorage.setItem("anhh", JSON.stringify(anhh));
          localStorage.setItem("gia", JSON.stringify(gia));
          hienthisl(i)
          }
        function dele(index) {
          var xacnhan = confirm("Bạn có muốn xóa sản phẩm");
          if (xacnhan) {
            product.splice(index, 1);
            motasp.splice(index, 1);
            anhh.splice(index, 1);
            gia.splice(index, 1);
            bang(product);
          }
        }
        function xoaall(index) {
          var xacnhan1 = confirm("Bạn có muốn xóa tất cả sản phẩm");
          if (xacnhan1) {
            product.splice(index, product.length);
            motasp.splice(index, motasp.length);
            anhh.splice(index, anhh.length);
            gia.splice(index, gia.length);
            bang(product);
          }
        }
        var newname
        function chinhsuamt(index) {
          div.style.display = 'block';
        var mtk =  document.getElementById("motasp").value = motasp[index]
          var newmota = mtk
          if (newmota) {
            motasp[index] = newmota;
          } else {
            motasp[index] = "";
          }
          var giaa =  document.getElementById("Gia").value = gia[index]
          var giaa1 = giaa
          if (giaa1) {
           gia[index] = giaa1;
          } else {
            gia[index] = "";
          }
          var newname1 = document.getElementById("newProduct").value = product[index];
         newname = newname1
          if (newname) {
            if (!product.includes(newname)) {
              product[index] = newname;
            } 
          } else {
            product[index] = "";
          }
          var newanh1 = document.getElementById("img").value = anhh[index];
          var newanh = newanh1
          if (newanh) {
           anhh[index] =newanh;
          } else {
            anhh[index] = "";
          }
        }
        function update(index) {
          var count = 0;
          var a = document.getElementById("motasp").value;
          var b = document.getElementById("newProduct").value;
          var c = document.getElementById("img").value;
          var d = document.getElementById("Gia").value;
          if (a && b !=""){
          product[index] = b;
          motasp[index] = a;
          anhh[index]= c;
          gia[index]= d;
          document.getElementById("motasp").value = "";
          document.getElementById("newProduct").value ="";
          document.getElementById("img").value ="";
          document.getElementById("motasp").value = "";
          document.getElementById("Gia").value = "";
          } else if (a == ""){
            alert("Mô Tả Sản Phẩm Đang Trống")
          } else if (b == ""){
            alert("Tên Sản Phẩm Đang Trống")
          }
          bang(product);
        }
        var motasp = localStorage.getItem("motasp");
        if (!motasp) {
          motasp = [];
        } else {
          motasp = JSON.parse(motasp);
        }
        var gia = localStorage.getItem("gia");
        if (!gia) {
          gia = [];
        } else {
          gia = JSON.parse(gia);
        }
        var product = localStorage.getItem("product");
        if (!product) {
          product = [];
        } else {                                                                          
          
          product = JSON.parse(product);
        }
        var anhh = localStorage.getItem("anhh");
        if (!anhh) {
          anhh = [];
        } else {                                                                          
          
          anhh = JSON.parse(anhh);
        }
        bang(product);
      
 function hienthisl(h){
      var sl = document.getElementById("soluong")
      if (h != null) {
        if(h> 0){
          sl.innerHTML = 'Có '+ h + " Sản Phẩm"
      }else {
        sl.innerHTML = 'Không có Sản Phẩm'
      } 
        }
        // bang(product);
      }
        const div = document.getElementById("motasp")
      
        div.style.display = 'none'
