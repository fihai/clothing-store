// Lấy danh sách tỉnh/thành phố
async function loadProvinces() {
    const response = await fetch("https://provinces.open-api.vn/api/p/");
    const provinces = await response.json();
    const provinceSelect = document.getElementById("province");

    provinces.forEach(province => {
        const option = document.createElement("option");
        option.value = province.code;
        option.text = province.name;
        provinceSelect.add(option);
    });
}

// Lấy danh sách quận/huyện theo tỉnh
async function loadDistricts() {
    const provinceCode = document.getElementById("province").value;
    const response = await fetch(`https://provinces.open-api.vn/api/p/${provinceCode}?depth=2`);
    const data = await response.json();
    const districtSelect = document.getElementById("district");
    districtSelect.innerHTML = `<option value="">Chọn quận/huyện</option>`;

    data.districts.forEach(district => {
        const option = document.createElement("option");
        option.value = district.code;
        option.text = district.name;
        districtSelect.add(option);
    });
}

// Lấy danh sách phường/xã theo quận/huyện
async function loadWards() {
    const districtCode = document.getElementById("district").value;
    const response = await fetch(`https://provinces.open-api.vn/api/d/${districtCode}?depth=2`);
    const data = await response.json();
    const wardSelect = document.getElementById("ward");
    wardSelect.innerHTML = `<option value="">Chọn phường/xã</option>`;

    data.wards.forEach(ward => {
        const option = document.createElement("option");
        option.value = ward.code;
        option.text = ward.name;
        wardSelect.add(option);
    });
}

// Gọi hàm loadProvinces khi tải trang
window.onload = loadProvinces;
