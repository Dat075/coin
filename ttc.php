<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giao diện TTC</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center; /* Căn giữa theo chiều dọc */
            min-height: 100vh;
            margin: 0;
            background-color: #f0f8e2; /* màu nền xanh chuối nhạt */
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .box {
            width: 250px; /* Chiều rộng ô */
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #4CAF50; /* màu nền ô */
            color: white;
            font-size: 24px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .box:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #4CAF50;
            width: 300px;
            background-color: #e8f5e9;
            text-align: center; /* Căn giữa nội dung */
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="box" onclick="fetchData('0853305378')">0853305378</div>
        <div class="box" onclick="fetchData('0853305379')">0853305379</div>
        <div class="box" onclick="fetchData('vyjm20KvOfaAApd')">vyjm20KvOfaAApd</div>
        <div class="result" id="resultDisplay">Kết quả sẽ hiển thị ở đây</div>
    </div>

    <script>
        function fetchData(token) {
            const url = `fetch_${token}.php`; // Đường dẫn tới file PHP để thực hiện yêu cầu
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    // Hiển thị kết quả chỉ với user và xu
                    document.getElementById('resultDisplay').innerText = `Kết quả cho ${token}: user - ${data.user}, xu - ${data.xu}`;
                })
                .catch(error => {
                    document.getElementById('resultDisplay').innerText = `Có lỗi xảy ra: ${error}`;
                });
        }
    </script>
</body>
</html>
