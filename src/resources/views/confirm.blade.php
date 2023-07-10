@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
@endsection

@section('content')
    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>内容確認</h2>
      </div>
      <form class="h-adr" action="/contacts" method="post">
        <div class="confirm-table">
          <table class="confirm-table__inner">
            @csrf
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text1">
                <input type="text" name="name1" value="{{ $contact['name1'] }}" />
                <input type="text" name="name2" value="{{ $contact['name2'] }}" />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">性別
              </th>
              <td class="confirm-table__text">
                <input type="text" name="gender" value="{{ $contact['gender'] }}" />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">メールアドレス
              </th>
              <td class="confirm-table__text">
                <input type="email" name="email" value="{{ $contact['email'] }}" />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">郵便番号</th>
              <td class="confirm-table__text">
                <input type="text" name="postcode" value="{{ $contact['postcode'] }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">住所</th>
              <td class="confirm-table__text">
                <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">建物名</th>
              <td class="confirm-table__text">
                <input type="text" name="building_name" value="{{ $contact['building_name'] }}" readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">ご意見</th>
              <td class="confirm-table__text2">
                <input type="text" name="opinion" cols="50" rows="10" wrap="soft" value="{{ $contact['opinion'] }}" readonly/>
              </td>
            </tr>
          </table>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
          <br>
          <a href="javascript:history.back();">修正する</a>
        </div>
      </form>
    </div>
  @endsection