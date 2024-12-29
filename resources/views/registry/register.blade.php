<html dir="rtl">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://localhost/HMS/public/Assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset("assets/registry-style/style.css")}}">


    <title>Patient Registeration Form</title>
    <style>
        .error-message {
            color: #a94442;
            background-color: #f2dede;
            border: 1px solid #ebccd1;
            border-radius: 4px;
            padding: 5px;
            margin-top: 5px;
            font-size: 12px;
            display: inline-block;}

        input[type="date"] {
            width: 15%;
            padding: 5px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

            input[type="date"]:focus {
                background-color: #ddd;
                outline: none;
            }

    </style>
</head>
<body>
<form action="{{ route('register.store') }}" method="POST">
    @csrf
    <div class="container">
        <h1 align="center "> شفاخانه معالجوی آریانا</h1>
        <h2 align="center "> فورم راجستر مریض</h2>

        <label> اسم* </label>
        </br>
        <input type="text" name="NAME" placeholder= "اسم مریض را وارد کنید" size="15" required  oninvalid="this.setCustomValidity('درج اسم ضروری میباشد')"
               oninput="this.setCustomValidity('')"/>
        @error('NAME')
        <div class="error-message" >{{ $message }}</div>
        @enderror
        </br>
        <label  > اسم پدر* </label>
        </br>
        <input type="text" name="FATHERNAME" placeholder="اسم پدر مریض را وارد کنید" size="15" required oninvalid="this.setCustomValidity('درج اسم پدر ضروری میباشد')"
               oninput="this.setCustomValidity('')" />
        @error('FATHERNAME')
        <div class="error-message">{{ $message }}</div>
        @enderror
        </br>
        <label> تخلص </label>
        </br>
        <input type="text" name="LASTNAME" placeholder="تخلص مریض را وارد کنید" size="15">
        </br> @error('LASTNAME')
        <div class="error-message">{{ $message }}</div>
        @enderror
        <label> سن* </label>
        </br>
        <input type="text" name="AGE" placeholder="سن مریض را وارد کنید" size="15"required oninvalid="this.setCustomValidity('درج سن ضروری میباشد')"
               oninput="this.setCustomValidity('')" />
        @error('AGE')
        <div class="error-message">{{ $message }}</div>
        @enderror
        <label id="main"> سکونت اصلی :</label>
        <input type="text" name="MAINRESIDENCE" placeholder="سکونت اصلی را وارد کنید" size="15" />
        @error('MAINRESIDENCE')
        <div class="error-message">{{ $message }}</div>
        @enderror
        <label id="current">  سکونت فعلی: </label>
        <input type="text" name="CURRENTRESIDENCE" placeholder="سکونت فعلی را وارد کنید" size="15" />
        @error('CURRENTRESIDENCE')
        <div class="error-message">{{ $message }}</div>
        @enderror
        <div>
            <label>
                نوع مریضی* :
            </label>

            <select name="DISEASE" required oninvalid="this.setCustomValidity('نوع مریضی را انتخاب نمایید')"
                    oninput="this.setCustomValidity('')" />
            <option value="">نوع مریضی</option>
            <option value="داخله">داخله</option>
            <option value="جلدی">جلدی</option>
            <option value="اورتوپیدی">اورتوپیدی</option>
            <option value="دندان">دندان</option>
            <option value="گوش و گلو">گوش و گلو</option>
            <option value="سایر">سایر</option>
            </select>
            @error('DISEASE')
            <div class="error-message">{{ $message }}</div>
            @enderror
            </br></br>
        </div>

        <div class="radio">
            <label>
                جنیست :
            </label>
            </br> </br>
            <input type="radio" value="مرد" name="SEX" checked > مرد  </br>
            <input type="radio" value="زن" name="SEX"> زن   </br>
            <input type="radio" value="طفل" name="SEX"> طفل </br>

        </div>
        @error('SEX')
        <div class="error-message">{{ $message }}</div>
        @enderror

        </br></br>
        <label>
            شماره تماس* :
        </label>
        <input type="text" name="PHONENUMBER" placeholder="شماره تماس را وارد کنید " size="10" required oninvalid="this.setCustomValidity('درج شماره تماس ضروری میباشد')"
               oninput="this.setCustomValidity('')"/>
        @error('PHONENUMBER')
        <div class="error-message">{{ $message }}</div>
        @enderror
        <label id="ADDRESS"> آدرس دقیق* : </label>
        <input type="text" name="ADDRESS" placeholder=" آدرس دقیق را وارد کنید" size="10" required oninvalid="this.setCustomValidity('درج آدرس ضروری میباشد')"
               oninput="this.setCustomValidity('')"/>
        @error('ADDRESS')
        <div class="error-message">{{ $message }}</div>
        @enderror
        </input>
        <label id="doctor" for="doctor"><b>داکتر معالج : </b></label>
        <input type="text" placeholder=" نام داکتر معالج را وارد کنید" name="DOCTORNAME" >
        @error('DOCTORNAME')
        <div class="error-message">{{ $message }}</div>
        @enderror
        </br></br>
        <label for="attenddate"><b>تاریخ مراجعه* :</b></label>

        <input type="date" placeholder="تاریخ مراجعه را وارد کنید" name="ATTENDDATE" required oninvalid="this.setCustomValidity('درج تاریخ مراجعه ضروری میباشد')"
               oninput="this.setCustomValidity('')"/

        @error('ATTENDDATE')
        <div class="error-message">{{ $message }}</div>
        @enderror
        </br></br></br>
        <label id="lastattend" for="LASTATTEND"><b>تاریخ مراجعه قبلی :</b></label>
        <input type="date" placeholder="( در صورتیکه مریض قبلا مراجعه نموده باشد )" name="LASTATTEND">
        @error('LASTATTEND')
        <div class="error-message">{{ $message }}</div>
        @enderror

        </br></br></br>
        <label for="COMPLAINS">شکایات عمده مریض</label>
        </br>
        <textarea id="complain" name="COMPLAINS" placeholder="شکایات عمده مریض  .............."></textarea>
        @error('COMPLAINS')
        <div class="error-message">{{ $message }}</div>
        @enderror
        <div class="DIAGNOSIS">
            <label for="DIAGNOSIS" > تشخیص مریضی </label>
            @error('DIAGNOSIS')
            <div class="error-message">{{ $message }}</div>
            @enderror
            </br>
            <textarea name="DIAGNOSIS" id="DIAGNOSIS" placeholder="معاینات داده شده و تشخیص مریضی ......." ></textarea>
        </div>

        <div class="PRESCRIPTION">
            <label for="PRESCRIPTION"> نسخه تجویز شده</label>

            </br>
            <textarea name="PRESCRIPTION" id="PRESCRIPTION" placeholder="Prescription Of Patient" dir="ltr" ></textarea>
        </div>
        @error('PRESCRIPTION')
        <div class="error-message">{{ $message }}</div>
        @enderror
        <button type="submit" class="registerbtn">راجستر</button>
    </div>
</form>

</body>
</html>
