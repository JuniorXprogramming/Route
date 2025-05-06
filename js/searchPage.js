window.onload = setPage;
const source = document.getElementById("source");
const destination = document.getElementById("destination");
const elemShowSearchItem = document.getElementById("search-show");
const elemShowSearchDesItem = document.getElementById("search-des");
const elemSearch = document.getElementById("result-search");
const elemDetailRoute = document.getElementById("detail-result-search");
const elemDrop = document.getElementById("drop");
let dynamicSearchItem = "";
let result = `<table class="table table-striped">
<thead>
    <tr>
        <th scope="col">สายรถ</th>
        <th scope="col">ต้นทาง</th>
        <th scope="col">ปลายทาง</th>
        <th scope="col">ราคา</th>
    </tr>
</thead>
<tbody>
`;
let detailTag = "";

function setPage() {
  const elemActiveNav = document.getElementById("nav-2");
  elemActiveNav.classList.add("nav-active");
}

async function fetchData(file) {
  const dataRoute = await fetch(`./system/${file}`);
  return await dataRoute.json();
}

async function searchRoute() {
  const data = await fetchData("dataRoute.php");
  if (source.value != "" && destination.value != "" && elemDrop.value == "") {
    const filData = data.filter(
      (item) =>
        item["route_start"].includes(source.value) ||
        item["route_des"].includes(destination.value)
    );
    filData.forEach((element) => {
      result += `
      <tr>
        <th scope="row">${element["route_id"]}</th>
        <td>${element["route_start"]}</td>
        <td>${element["route_des"]}</td>
        <td>${element["route_price"]} บาท</td>
      </tr>`;
    });
  }

  if (source.value != "" && destination.value == "" && elemDrop.value == "") {
    const filData = data.filter((item) =>
      item["route_start"].includes(source.value)
    );
    filData.forEach((element) => {
      result += `<tr>
      <th scope="row">${element["route_id"]}</th>
      <td>${element["route_start"]}</td>
      <td>${element["route_des"]}</td>
      <td>${element["route_price"]} บาท</td>
    </tr>`;
    });
  }

  if (source.value == "" && destination.value != "" && elemDrop.value == "") {
    const filData = data.filter((item) =>
      item["route_des"].includes(destination.value)
    );
    filData.forEach((element) => {
      result += `<tr>
      <th scope="row">${element["route_id"]}</th>
      <td>${element["route_start"]}</td>
      <td>${element["route_des"]}</td>
      <td>${element["route_price"]} บาท</td>
    </tr>`;
    });
  }

  if (source.value == "" && destination.value == "" && elemDrop.value == "") {
    result = `<div><h1 style="overflow-y: hidden;">กรุณากรอกข้อมูล</h1></div>`;
    elemSearch.innerHTML = result;
    elemSearch.style.display = "flex";
    result = `<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">สายรถ</th>
            <th scope="col">ต้นทาง</th>
            <th scope="col">ปลายทาง</th>
            <th scope="col">ราคา</th>
        </tr>
    </thead>
    <tbody>`;
    return 0;
  }
  if (source.value != "" && elemDrop.value != "" && destination.value == "") {
    const filData = data.filter((item) =>
      item["route_start"].includes(source.value)
    );
    const finalData = filData.filter((item) =>
      item["route_detail"].split("-").includes(elemDrop.value)
    );
    const priceDrop = finalData.map((item) => item["route_detail"].split("-"));
    const indexPrice = priceDrop.map((item) => item.indexOf(elemDrop.value));
    for (let i = 0; i < finalData.length; i++) {
      result += `<tr>
      <th scope="row">${finalData[i]["route_id"]}</th>
      <td>${finalData[i]["route_start"]}</td>
      <td>${finalData[i]["route_des"]}</td>
      <td>${finalData[i]["route_detail"].split("-")[indexPrice[i]+1]} บาท</td>
    </tr>`;
    }
  }
  if (source.value == "" && elemDrop.value != "" && destination.value != "") {
    const filData = data.filter((item) =>
      item["route_des"].includes(destination.value)
    );
    const finalData = filData.filter((item) =>
      item["route_detail"].split("-").includes(elemDrop.value)
    );
    const priceDrop = finalData.map((item) => item["route_detail"].split("-"));
    const indexPrice = priceDrop.map((item) => item.indexOf(elemDrop.value));
    for (let i = 0; i < finalData.length; i++) {
      result += `<tr>
      <th scope="row">${finalData[i]["route_id"]}</th>
      <td>${finalData[i]["route_start"]}</td>
      <td>${finalData[i]["route_des"]}</td>
      <td>${finalData[i]["route_detail"].split("-")[indexPrice[i]+1]} บาท</td>
    </tr>`;
    }
  }
  if (source.value == "" && elemDrop.value != "" && destination.value == "") {
    const filData = data.filter((item) =>
      item["route_detail"].split("-").includes(elemDrop.value)
    );
    console.log(filData)
    const priceDrop = filData.map((item) => item["route_detail"].split("-"));
    const indexPrice = priceDrop.map((item) => item.indexOf(elemDrop.value));
    for (let i = 0; i < filData.length; i++) {
      result += `<tr>
      <th scope="row">${filData[i]["route_id"]}</th>
      <td>${filData[i]["route_start"]}</td>
      <td>${filData[i]["route_des"]}</td>
      <td>${filData[i]["route_detail"].split("-")[indexPrice[i]+1] == 0 ? "จุดขึ้นรถ" : filData[i]["route_detail"].split("-")[indexPrice[i]+1] + "บาท"}</td>
    </tr>`;
    }
  }
  
  
  result += `</tbody>
  </table>`;
  elemSearch.style.display = "flex";
  elemSearch.innerHTML = result;
  result = `<table class="table table-striped">
  <thead>
      <tr>
          <th scope="col">สายรถ</th>
          <th scope="col">ต้นทาง</th>
          <th scope="col">ปลายทาง</th>
          <th scope="col">ราคา</th>
      </tr>
  </thead>
  <tbody>`;
  elemSearch.scrollIntoView({ behavior: "smooth" });
}

$(document).ready(function () {
  $("#source").keyup(async function () {
    const data = await fetchData("dataSource.php");
    const regex = new RegExp(`^${this.value}`);
    const filData = data.filter((item) => regex.exec(item["route_start"]));
    filData.forEach((element) => {
      if (this.value != "") {
        dynamicSearchItem += `<p class="selectinput" onclick="changeInputValue('source', '${element["route_start"]}')">${element["route_start"]}</p>`;
        elemShowSearchItem.style.display = "block";
      } else {
        dynamicSearchItem = "";
        elemShowSearchItem.style.display = "none";
      }
    });

    elemShowSearchItem.innerHTML = dynamicSearchItem;
    dynamicSearchItem = "";
  });
});

$(document).ready(function () {
  $("#destination").keyup(async function () {
    const data = await fetchData("dataDes.php");
    const regex = new RegExp(`^${this.value}`);
    const filData = data.filter((item) => regex.exec(item["route_des"]));
    filData.forEach((element) => {
      if (this.value != "") {
        dynamicSearchItem += `<p class="selectinput" onclick="changeInputValue('destination', '${element["route_des"]}')">${element["route_des"]}</p>`;
        elemShowSearchDesItem.style.display = "block";
      } else {
        dynamicSearchItem = "";
        elemShowSearchDesItem.style.display = "none";
      }
    });

    elemShowSearchDesItem.innerHTML = dynamicSearchItem;
    dynamicSearchItem = "";
  });
});

function changeInputValue(elem, value) {
  const elementToChange = document.getElementById(elem);
  elementToChange.value = value;
}

async function detailRoute(event) {
  const data = await fetchData("dataRoute.php");
  console.log(event);
  const clickDetail = event.target.innerText.split("-");
  data.forEach((element) => {
    if (
      clickDetail[0] == element["route_start"] &&
      clickDetail[1] == element["route_des"]
    ) {
      detailTag += `<p class="text-center">${element["route_start"]} ถึง ${element["route_des"]} ${element["route_price"]} บาท</p>
                            <p class="text-center">${element["route_detail"]}</p>
                        `;
    }
  });
  elemDetailRoute.style.display = "flex";
  elemDetailRoute.innerHTML = detailTag;
  detailTag = "";
}

function resetForm() {
  source.value = "";
  destination.value = "";
  elemDrop.value = ""
}
