  @extends('layouts.app')

  @section('css')
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
  @endsection
  <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>

  @section('content')

    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
      </div>
      <form class="h-adr" action="/contacts/confirm" method="post">
      @csrf
        <div class="form__group1">
          <div class="form__group-title">
            <label class="form__label--item">お名前</label>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
              <div class="form__input--text1">
                <input type="text" name="name1" value="{{ old('name1') }}" />
                <input type="text" name="name2" value="{{ old('name2') }}" />
              </div>
                <div class="form__input">
                  <span class="form__input--graytext1">例）山田</span>
                  <span class="form__input--graytext1">例）太郎</span>
                </div>
            <div class="form__error">
              @error('name1')
              {{ $message }}
              @enderror
            </div>
            <div class="form__error">
              @error('name2')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <label class="form__label--item">性別</label>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content3">
            <label class="radio">
                <input  class="radio-input" type="radio"  name="gender" value="男性" checked>
                <span class="radio-text" for="male">男性</span>
            </label>
            <label class="radio">
                <input  class="radio-input" type="radio"  name="gender" value="女性">
                <span class="radio-text" for="female">女性</span>
            </label>
          </div>
            <div class="form__error">
              @error('gender')
              {{ $message }}
              @enderror
            </div>
          </div>
        <div class="form__group">
          <div class="form__group-title">
            <label class="form__label--item">メールアドレス</label>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" value="{{ old('email') }}">
            </div>
            <div class="form__input">
              <span class="form__input--graytext">例）test@example.com</span>
            </div>
            <div class="form__error">
              @error('email')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
          <div class="form__group">
            <div class="form__group-title">
              <label class="form__label--item">郵便番号</label>
              <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
              <div class="form__input--text2">
                <span class="p-country-name" >Japan</span>
                <span class="form__label--item">〒</span>
                <input type="text" class="p-postal-code" size="8" maxlength="8" name="postcode" value="{{ old('name') }}">
              </div>
              <div class="form__input">
                <span class="form__input--graytext">例）123-4567</span>
              </div>
              <div class="form__error">
              @error('postcode')
              {{ $message }}
              @enderror
              </div>
            </div>
          </div>
          <div class="form__group">
            <div class="form__group-title">
              <label class="form__label--item">住所</label>
              <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
              <div class="form__input--text">
                <input type="text" class="p-region p-locality p-street-address p-extended-address" name="address" value="{{ old('name') }}">
              </div>
              <div class="form__input">
              <span class="form__input--graytext">例）東京都渋谷区千駄ヶ谷1-2-3</span>
            </div>
              <div class="form__error">
              @error('address')
              {{ $message }}
              @enderror
              </div>
            </div>
          </div>
        <div class="form__group">
          <div class="form__group-title">
            <label class="form__label--item">建物名</label>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building_name">
            </div>
            <div class="form__input">
              <span class="form__input--graytext">例）千駄ヶ谷マンション101</span>
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <label class="form__label--item">ご意見</label>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="opinion" maxlength = 120></textarea>
            </div>
            <div class="form__error">
                @error('opinion')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認
          </button>
        </div>
      </form>
    </div>
  @endsection