<html dir="rtl">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://localhost/HMS/public/Assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset("assets/registry-style/style.css")}}">


    <title>Patient Registration Form</title>
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
<form action="{{ route('patients.update', $record->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="container">
        <h1 align="center "> شفاخانه معالجوی آریانا</h1>
        <h2 align="center "> فورم راجستر مریض</h2>

        <label> اسم* </label>
        </br>
        <input type="text" name="NAME" value="{{ old('NAME', $record->NAME) }}" placeholder= "اسم مریض را وارد کنید" size="15" required  oninvalid="this.setCustomValidity('درج اسم ضروری میباشد')"
               oninput="this.setCustomValidity('')"/>

        @error('NAME')
        <div class="error-message" >{{ $message }}</div>
        @enderror
        </br>
        <label  > اسم پدر* </label>
        </br>
        <input type="text" name="FATHERNAME" value="{{ old('FATHERNAME', $record->FATHERNAME) }}" placeholder="اسم پدر مریض را وارد کنید" size="15" required oninvalid="this.setCustomValidity('درج اسم پدر ضروری میباشد')"
               oninput="this.setCustomValidity('')" />
        @error('FATHERNAME')
        <div class="error-message">{{ $message }}</div>
        @enderror
        </br>
        <label> تخلص </label>
        </br>
        <input type="text" name="LASTNAME" value="{{ old('LASTNAME', $record->LASTNAME) }}" placeholder="تخلص مریض را وارد کنید" size="15">
        </br> @error('LASTNAME')
        <div class="error-message">{{ $message }}</div>
        @enderror
        <label> سن* </label>
        </br>
        <input type="text" name="AGE" value="{{ old('AGE', $record->AGE) }}" placeholder="سن مریض را وارد کنید" size="15"required oninvalid="this.setCustomValidity('درج سن ضروری میباشد')"
               oninput="this.setCustomValidity('')" />
        @error('AGE')
        <div class="error-message">{{ $message }}</div>
        @enderror
        <label id="main"> سکونت اصلی :</label>
        <input type="text" name="MAINRESIDENCE" value="{{ old('MAINRESIDENCE', $record->MAINRESIDENCE) }}" placeholder="سکونت اصلی را وارد کنید" size="15" />
        @error('MAINRESIDENCE')
        <div class="error-message">{{ $message }}</div>
        @enderror
        <label id="current">  سکونت فعلی: </label>
        <input type="text" name="CURRENTRESIDENCE" value="{{ old('CURRENTRESIDENCE', $record->CURRENTRESIDENCE) }}" placeholder="سکونت فعلی را وارد کنید" size="15" />
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
            <option value="داخله" {{ old('DISEASE', $record->DISEASE) == 'داخله' ? 'selected' : '' }}>داخله</option>
            <option value="جلدی" {{ old('DISEASE', $record->DISEASE) == 'جلدی' ? 'selected' : '' }}>جلدی</option>
            <option value="اورتوپیدی" {{ old('DISEASE', $record->DISEASE) == 'اورتوپیدی' ? 'selected' : '' }}>اورتوپیدی</option>
            <option value="دندان" {{ old('DISEASE', $record->DISEASE) == 'دندان' ? 'selected' : '' }}>دندان</option>
            <option value="گوش و گلو" {{ old('DISEASE', $record->DISEASE) == 'گوش و گلو' ? 'selected' : '' }}>گوش و گلو</option>
            <option value="سایر" {{ old('DISEASE', $record->DISEASE) == 'سایر' ? 'selected' : '' }}>سایر</option>
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
            <input type="radio" name="SEX" value="مرد" {{ old('SEX', $record->SEX) == 'مرد' ? 'checked' : '' }}> مرد
            <input type="radio" name="SEX" value="زن" {{ old('SEX', $record->SEX) == 'زن' ? 'checked' : '' }}> زن
            <input type="radio" name="SEX" value="طفل" {{ old('SEX', $record->SEX) == 'طفل' ? 'checked' : '' }}> طفل

        </div>
        @error('SEX')
        <div class="error-message">{{ $message }}</div>
        @enderror

        </br></br>
        <label>
            شماره تماس* :
        </label>
        <input type="text" name="PHONENUMBER" value="{{ old('PHONENUMBER', $record->PHONENUMBER) }}" placeholder="شماره تماس را وارد کنید " size="10" required oninvalid="this.setCustomValidity('درج شماره تماس ضروری میباشد')"
               oninput="this.setCustomValidity('')"/>
        @error('PHONENUMBER')
        <div class="error-message">{{ $message }}</div>
        @enderror
        <label id="ADDRESS"> آدرس دقیق* : </label>
        <input type="text" name="ADDRESS" value="{{ old('ADDRESS', $record->ADDRESS) }}" placeholder=" آدرس دقیق را وارد کنید" size="10" required oninvalid="this.setCustomValidity('درج آدرس ضروری میباشد')"
               oninput="this.setCustomValidity('')"/>
        @error('ADDRESS')
        <div class="error-message">{{ $message }}</div>
        @enderror
        </input>
        <label id="doctor" for="doctor"><b>داکتر معالج : </b></label>
        <input type="text" placeholder=" نام داکتر معالج را وارد کنید" name="DOCTORNAME" value="{{ old('DOCTORNAME', $record->DOCTORNAME) }}" >
        @error('DOCTORNAME')
        <div class="error-message">{{ $message }}</div>
        @enderror
        </br></br>
        <label for="attenddate" ><b>تاریخ مراجعه* :</b></label>

        <input type="date" placeholder="تاریخ مراجعه را وارد کنید" name="ATTENDDATE" value="{{ old('ATTENDDATE', $record->ATTENDDATE) }}" required oninvalid="this.setCustomValidity('درج تاریخ مراجعه ضروری میباشد')"
               oninput="this.setCustomValidity('')"/

        @error('ATTENDDATE')
        <div class="error-message">{{ $message }}</div>
        @enderror
        </br></br></br>
        <label id="lastattend" for="LASTATTEND"><b>تاریخ مراجعه قبلی :</b></label>
        <input type="date" value="{{ old('LASTATTEND', $record->LASTATTEND) }}" placeholder="( در صورتیکه مریض قبلا مراجعه نموده باشد )" name="LASTATTEND">
        @error('LASTATTEND')
        <div class="error-message">{{ $message }}</div>
        @enderror

        </br></br></br>
        <label for="COMPLAINS">شکایات عمده مریض</label>
        </br>
        <textarea id="complain" name="COMPLAINS" placeholder="شکایات عمده مریض  ..............">{{ old('COMPLAINS', $record->COMPLAINS) }}</textarea>
        @error('COMPLAINS')
        <div class="error-message">{{ $message }}</div>
        @enderror
        <div class="DIAGNOSIS">
            <label for="DIAGNOSIS" > تشخیص مریضی </label>

            </br>
            <textarea name="DIAGNOSIS" id="DIAGNOSIS" placeholder="معاینات داده شده و تشخیص مریضی ......." > {{ old('DIAGNOSIS', $record->DIAGNOSIS) }}</textarea>
        </div>
        @error('DIAGNOSIS')
        <div class="error-message">{{ $message }}</div>
        @enderror

        <div class="PRESCRIPTION">
            <label for="PRESCRIPTION"> نسخه تجویز شده</label>

            </br>
            <textarea name="PRESCRIPTION" id="PRESCRIPTION" placeholder="Prescription Of Patient" dir="ltr" > {{ old('PRESCRIPTION', $record->PRESCRIPTION) }} </textarea>
        </div>
        @error('PRESCRIPTION')
        <div class="error-message">{{ $message }}</div>
        @enderror
        <button type="submit" class="registerbtn">راجستر</button>
    </div>
</form>
</body>
</html>
