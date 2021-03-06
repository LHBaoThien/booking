@extends("user.master")

@section('title')
    Terms of Sevices
@endsection
@section('content')
    <!--main-->
    <div class="main" role="main">
        <div class="wrap clearfix">
            <!--main content-->
            <div class="content clearfix">
                <!--breadcrumbs-->
                <nav role="navigation" class="breadcrumbs clearfix">
                    <!--crumbs-->
                    <ul class="crumbs">
                        <li><a href="{{ route('userHomePage') }}" title="Home">Home</a></li>
                        <li>Terms of Service</li>
                    </ul>
                    <!--//crumbs-->
                </nav>
                <!--//breadcrumbs-->

                <!--full content-->
                <section class="full-width">
                    <h2 id="introduction_tcs" class="bui-f-font-heading"> Giới thiệu về Điều khoản và điều kiện </h2>
                    <p>Các điều khoản và điều kiện này, đôi khi có thể được chỉnh sửa, sẽ áp dụng cho tất cả các dịch vụ
                        trực tiếp hoặc gián tiếp (qua đối tác phân phối) của chúng tôi có trên mạng, qua bất kỳ thiết bị di
                        động nào, qua email hoặc điện thoại. Bằng cách truy cập vào, xem qua và sử dụng trang web (dành cho
                        thiết bị di động) hay ứng dụng của chúng tôi thông qua bất kỳ kênh nào (từ đây về sau gọi chung là
                        “Kênh”) và/hoặc bằng cách hoàn tất đặt phòng, bạn thừa nhận và đồng ý đã đọc, hiểu rõ và đồng ý với
                        các điều khoản và điều kiện được nêu ra bên dưới (kể cả mục An toàn và Bảo mật).</p>
                    <p>Những trang này, nội dung và cơ sở vật chất của những trang này, cũng như dịch vụ đặt phòng khách sạn
                        trực tuyến (bao gồm việc cung cấp dịch vụ xử lý thanh toán) được cung cấp bởi chúng tôi trên những
                        trang này và thông qua trang web đều được sở hữu, điều hành và cung cấp bởi Book Your Travel B.V. và
                        chỉ được cung cấp cho mục đích cá nhân, không mang tính thương mại (B2C) của bạn, tùy thuộc vào các
                        điều khoản và điều kiện nêu dưới đây. Mối quan hệ giữa chúng tôi với Nhà Cung Cấp Chuyến Đi được
                        điều phối bởi các điều khoản và điều kiện riêng biệt chi phối mối quan hệ thương mại (B2B) mà chúng
                        tôi có với từng Nhà Cung Cấp Chuyến Đi này. Mỗi Nhà Cung Cấp Chuyến Đi tương tác chuyên nghiệp đối
                        với Book Your Travel khi thực hiện các sản phẩm và/hoặc dịch vụ của mình trên hoặc thông qua Book
                        Your Travel (cả cho mối quan hệ doanh nghiệp với doanh nghiệp ("B2B") và/hoặc doanh nghiệp với người
                        tiêu dùng ("B2C") của họ). Xin lưu ý rằng Nhà Cung Cấp Chuyến Đi có thể có, tuyên bố và/hoặc yêu cầu
                        (sự chấp nhận) – bên cạnh các chính sách và ghi chú như được tiết lộ trên trang web, các điều khoản
                        và điều kiện (giao hàng/vận chuyển/vận tải/việc sử dụng) của riêng họ và các quy tắc riêng trong nhà
                        để sử dụng, truy cập và tiêu thụ Chuyến đi (mà có thể bao gồm một số tuyên bố từ chối trách nhiệm và
                        giới hạn trách nhiệm pháp lý).</p>
                    <h2 id="tcs_s0" class="bui-f-font-heading"> Định nghĩa </h2>
                    <p>"Book Your Travel", "chúng tôi", hoặc "của chúng tôi" có nghĩa là Book Your Travel B.V., công ty
                        trách nhiệm hữu hạn tư nhân, được thành lập theo luật pháp của Hà Lan và có địa chỉ đăng ký tại
                        Herengracht 597, 1017 CE Amsterdam, Hà Lan. "Kênh" có nghĩa là trang web và ứng dụng (di động) cung
                        cấp Dịch vụ, được sở hữu, kiểm soát, quản lý, bảo trì và/hoặc lưu trữ bởi Book Your Travel."Chuyến
                        đi" có nghĩa rằng nhiều sản phẩm và dịch vụ du lịch khác nhau từ Nhà Cung Cấp Chuyến Đi mà có thể
                        được đặt hàng, nhận, thanh toán, mua, trả tiền, thuê, cung cấp, đặt chỗ, gộp lại hoặc tiêu thụ bởi
                        bạn.</p>
                    <p>"Nhà Cung Cấp Chuyến Đi" có nghĩa là nhà cung cấp chỗ nghỉ (ví dụ: khách sạn, nhà nghỉ, căn hộ,
                        B&amp;B, chủ nhà), địa điểm tham quan (ví dụ: công viên chủ đề, bảo tàng, tour tham quan), nhà cung
                        cấp phương tiện giao thông vận tải (ví dụ: xe ô tô cho thuê, du thuyền, phương tiện đường sắt, xe
                        đưa đón sân bay, xe khách, xe đưa đón), nhà điều hành tour, bảo hiểm du lịch và bất cứ các sản phẩm
                        hay dịch vụ du lịch hay liên quan đến du lịch hoặc các sản phẩm có thể được Đặt chỗ chuyến đi trên
                        Kênh theo thời gian (dù là B2B hay B2C).</p>
                    <p>"Dịch vụ chuyến đi" có nghĩa là dịch vụ (xử lý) thanh toán hoặc đặt chỗ, đặt mua trực tuyến do Book
                        Your Travel cung cấp hoặc cho phép đối với các sản phẩm và dịch vụ khác nhau theo thời gian do Nhà
                        Cung Cấp Chuyến Đi cung cấp trên Kênh.</p>
                    <p>"Đặt chỗ chuyến đi" là việc đặt hàng, mua, thanh toán hoặc đặt chỗ cho một Chuyến đi.</p>
                    <p></p>
                    <p></p>
                    <h2 id="tcs_s1" class="bui-f-font-heading"> 1. Phạm vi và tính chất Dịch vụ của chúng tôi </h2>
                    <p>Thông qua Kênh, chúng tôi (Book Your Travel B.V. và các đối tác (phân phối) của công ty) cung cấp
                        kênh trực tuyến mà qua đó, các Nhà Cung Cấp Chuyến Đi – trong phạm vi kinh doanh nghiệp vụ của mình
                        (ví dụ: B2C hay B2B) – có thể quảng cáo, đưa ra thị trường, bán, quảng bá và/hoặc cung cấp sản phẩm
                        và dịch vụ của (nếu có) cho việc đặt, mua, thuê và qua đó, các khách liên quan của Kênh có thể khám
                        phá, tìm kiếm, so sánh và đặt, mua hoặc thanh toán (ví dụ: Dịch vụ chuyến đi). Bằng cách sử dụng và
                        tận dụng Dịch vụ chuyến đi (ví dụ: Đặt chuyến đi qua Dịch vụ chuyến đi), bạn thiết lập mối quan hệ
                        bằng hợp đồng (ràng buộc pháp lý) trực tiếp với Nhà Cung Cấp Chuyến Đi mà bạn đặt hoặc mua sản phẩm
                        hay dịch vụ (nếu có). Từ thời điểm bạn thực hiện đặt phòng, chúng tôi chỉ đóng vai trò duy nhất là
                        cầu nối giữa bạn và Nhà cung cấp, chuyển giao các chi tiết đặt phòng của bạn đến (các) Nhà Cung Cấp
                        Chuyến Đi tương ứng và gửi đến bạn email xác nhận cho và thay mặt Nhà cung cấp. Book Your Travel
                        không bán (lại), cho thuê hay cung cấp bất cứ sản phẩm hay dịch vụ (du lịch) nào.</p>
                    <p>Khi cung cấp các Dịch Vụ Chuyến Đi, thông tin mà chúng tôi đưa ra là dựa vào thông tin các Nhà Cung
                        Cấp Chuyến Đi đã cung cấp cho chúng tôi. Vì vậy, các Nhà Cung Cấp Chuyến Đi đã đưa sản phẩm Chuyến
                        Đi lên và quảng bá trên Kênh của chúng tôi được quyền truy cập vào hệ thống và mạng extranet của
                        chúng tôi, qua đó họ hoàn toàn chịu trách nhiệm về việc cập nhật tất cả thông tin về giá/phí, tình
                        trạng phòng trống, chính sách và điều kiện và các thông tin liên quan khác hiển thị trên Kênh của
                        chúng tôi. Mặc dù chúng tôi sẽ sử dụng kỹ năng hợp lý và cẩn trọng trong khi thực hiện Dịch Vụ
                        Chuyến Đi của mình, chúng tôi sẽ không chứng minh, và không thể đảm bảo rằng, toàn bộ thông tin là
                        chính xác, hoàn chỉnh hoặc đúng, cũng như chúng tôi không thể chịu trách nhiệm vì bất kỳ lỗi nào
                        (bao gồm cả các lỗi đánh máy và lỗi thấy rõ), bất kỳ sự gián đoạn nào (dù là do hỏng hóc, sửa chữa,
                        nâng cấp hay bảo trì (tạm thời và/hay một phần) nào của Kênh chúng tôi hoặc ngược lại), thông tin
                        thiếu chính xác, gây hiểu lầm hoặc không thật hay không đưa ra thông tin. Mỗi Nhà Cung Cấp Chuyến Đi
                        đều luôn chịu trách nhiệm về sự chính xác, hoàn chỉnh và đúng đắn của thông tin (miêu tả) (bao gồm
                        cả giá/phí, tình trạng phòng trống, chính sách và điều kiện) hiển thị trên Kênh chúng tôi. Kênh
                        chúng tôi không tạo thành và không được xem là sự giới thiệu hay xác nhận cho chất lượng, cấp độ
                        phục vụ, đánh giá hay xếp hạng (sao), loại chỗ nghỉ của bất kỳ Nhà Cung Cấp Chuyến Đi nào (hay tiện
                        nghi, không gian, phương tiện vận tải, sản phẩm hay dịch vụ (chính hay bổ sung)) có trên đó, trừ khi
                        có chỉ định rõ ràng điều ngược lại.</p>
                    <p>Dịch vụ chuyến đi của chúng tôi được tạo ra chỉ để sử dụng cá nhân và không mang tính thương mại. Vì
                        vậy, bạn không được phép bán lại, liên kết sâu, sử dụng, sao chép, giám sát (vd: dưới dạng spider,
                        scrape), phô trương, tải về hoặc sản xuất lại bất kỳ nội dung hoặc thông tin, phần mềm, sản phẩm
                        hoặc dịch vụ nào có trên Kênh chúng tôi cho bất kỳ hoạt động/mục đích mang tính cạnh tranh hoặc
                        thương mại nào.</p>
                    <h2 id="tcs_s2" class="bui-f-font-heading"> 2. Giá, giá được gạch bỏ, Đảm bảo giá tốt nhất và chương
                        trình Genius </h2>
                    <p>Giá như đã cung cấp bởi các Nhà Cung Cấp Chuyến Đi trên Kênh chúng tôi mang tính cạnh tranh cao. Tất
                        cả các mức giá được hiển thị cho Chuyến đi của bạn đã bao gồm thuế GTGT cùng tất cả các loại thuế
                        khác (tuỳ thuộc vào sự thay đổi của các loại thuế này) và phí, trừ khi được nêu khác trên Kênh chúng
                        tôi hoặc trong email/vé xác nhận. Giá vé được áp dụng cho từng người hoặc nhóm và tùy theo thời hạn
                        hiệu lực được hiển thị trên vé, nếu có. Thuế và phí áp dụng (bao gồm thuế thành phố/du lịch) có thể
                        được Nhà Cung Cấp Chuyến Đi thu trong trường hợp tính phí vắng mặt hay hủy phòng.</p>
                    <p>Đôi khi trên Kênh chúng tôi có giá rẻ hơn cho đợt lưu trú cụ thể tại 1 chỗ nghỉ, sản phẩm hoặc dịch
                        vụ; tuy nhiên, những mức giá được đưa ra bởi các Nhà Cung Cấp Chuyến Đi này có thể bao gồm các điểm
                        hạn chế và điều kiện đặc biệt, ví dụ như không thể huỷ và không hoàn tiền. Vui lòng kiểm tra các chi
                        tiết và điều kiện về sản phẩm, dịch vụ và đặt phòng một cách thấu đáo để được biết về các điều kiện
                        này trước khi thực hiện đặt phòng của bạn.</p>
                    <p>Giá gạch bỏ dựa trên mức giá hiện tại cao thứ 3 của Nhà Cung Cấp Chuyến Đi dành cho Chuyến Đi của bạn
                        với cùng điều kiện đặt chỗ hoặc mua 15 ngày trước và 15 ngày sau ngày nhận phòng hoặc ngày tiêu thụ.
                        Nếu từ giờ đến ngày nhận phòng hoặc ngày tiêu thụ còn ít hơn 15 ngày, chúng tôi sẽ cộng thêm ngày
                        sau ngày nhận phòng hoặc ngày tiêu thụ để sao cho đủ 30 ngày.</p>
                    <p>Chúng tôi muốn bạn trả giá thấp nhất có thể cho sản phẩm và dịch vụ đã chọn. Nếu bạn tìm được sản
                        phẩm và dịch vụ đã chọn thông qua Kênh, với cùng các điều kiện Chuyến đi, có giá thấp hơn trên
                        Internet sau khi bạn đã đặt qua chúng tôi, chúng tôi sẽ thanh toán phần khác biệt giữa giá của mình
                        và giá thấp hơn đó theo các điều kiện và điều khoản của lời hứa <a
                            href="https://www.Book Your Travel/general.vi.html?label=gen173nr-1FCAEoggI46AdIM1gEaPQBiAEBmAEquAETyAEa2AEB6AEB-AEQiAIBqAIDuAKH6Ob4BcACAdICJGYyZTg0YzA0LThmYzQtNGVhYi05ODVlLWJlZGJjMzcxYzM1MtgCBuACAQ;tmpl=doc/rate_guarantee"
                            id="terms_rateguarantee" class="bui-link">Chúng Tôi Khớp Giá</a>. Lời hứa Chúng Tôi Khớp Giá
                        không áp dụng cho các sản phẩm và dịch vụ không liên quan đến lưu trú.</p>
                    <p>Công cụ chuyển đổi tiền tệ chỉ mang tính cung cấp thông tin, không nên được xem là chính xác và theo
                        thời gian thực; giá thật sự có thể khác biệt.</p>
                    <p>Các lỗi quá rõ ràng (bao gồm lỗi in sai) là không ràng buộc.</p>
                    <p>Tất cả các ưu đãi đặc biệt và chương trình khuyến mãi đều được đánh dấu như vậy. Nếu không, bạn không
                        có quyền gì trong trường hợp có lỗi hoặc sai lầm hiển nhiên.</p>
                    <h3>Chương trình Genius</h3>
                    <p>Mức giá Genius là mức chiết khấu được các chỗ nghỉ chào cho một số loại phòng/đơn vị chỗ nghỉ nhất
                        định.</p>
                    <p>Mức giá Genius dành cho các thành viên chương trình Genius của Book Your Travel. Chương trình Genius
                        dành cho bất kỳ ai có tài khoản trên Nền tảng. Không phải nộp phí thành viên và tất cả những gì bạn
                        cần làm để trở thành thành viên là hoàn thành hai (2) lần lưu trú trong hai (2) năm. Tư cách thành
                        viên và mức giá Genius là dành cho cá nhân thành viên đó và không thể chuyển nhượng. Tư cách thành
                        viên cũng có thể được liên kết với các chương trình hoặc ưu đãi cụ thể, như đôi khi được Book Your
                        Travel tùy ý đưa ra hoặc truyền thông.</p>
                    <p>Chương trình Genius hiện đưa ra hai (2) cấp thành viên dựa trên số lượng đặt phòng được thực hiện
                        thông qua nền tảng Book Your Travel, mỗi cấp có mức chiết khấu khác nhau cho các chỗ nghỉ và/hoặc
                        các lựa chọn được chọn (10% và/hoặc 15%). Các cấp thành viên có thể khác đi và có thể thay đổi, do
                        Book Your Travel toàn quyền quyết định.</p>
                    <p>Book Your Travel có quyền thu hồi và hủy bỏ tư cách thành viên Genius của bất kỳ cá nhân nào trong
                        trường hợp họ lạm dụng, chẳng hạn như vi phạm các điều khoản &amp; điều kiện này, và/hoặc sử dụng
                        thẻ tín dụng không hợp lệ. Ngoài ra, Book Your Travel còn có quyền thu hồi và hủy bỏ tư cách thành
                        viên Genius của bất kỳ cá nhân nào tham gia vào hành vi không phù hợp, như bạo lực, đe dọa, quấy
                        rối, phân biệt đối xử, tục tĩu hoặc lừa đảo liên quan đến Book Your Travel (hoặc nhân viên và đại lý
                        của Book Your Travel) và/hoặc đơn vị chỗ nghỉ (hoặc nhân viên và đại lý của đơn vị chỗ nghỉ).</p>
                    <p>Mức giá Genius không được kết hợp hoặc sử dụng cùng với các giảm giá khác (trừ khi được đơn vị chỗ
                        nghỉ chấp thuận hoặc có quy định khác đi). Tùy theo quyết định của mình, Book Your Travel có thể
                        thay đổi, giới hạn hoặc sửa đổi (từng phần) cấu trúc chương trình Genius hoặc bất kỳ tính năng nào
                        khác của chương trình (bao gồm nhưng không giới hạn ở (trạng thái của) (các) cấp độ Genius chủ thể),
                        vì bất cứ lý do gì, mà không cần thông báo trước.</p>
                    <p>Tư cách thành viên Genius được liên kết với tài khoản của bạn trên Book Your Travel và sẽ không hết
                        hạn hoặc chấm dứt trừ khi bạn chấm dứt, đóng, xóa hoặc thu hồi tài khoản của mình. Book Your Travel
                        cũng có quyền “hủy đăng ký" hoặc vô hiệu hóa tài khoản không hoạt động mà không cần thông báo cho
                        bạn. Tài khoản không hoạt động được định nghĩa là tài khoản không thực hiện một đặt phòng nào trong
                        vòng hơn năm (5) năm. Trong trường hợp tài khoản của bạn bị vô hiệu hóa, bạn sẽ không còn đủ điều
                        kiện được hưởng các lợi ích của chương trình Genius nữa. Bạn có thể kích hoạt lại tài khoản của mình
                        bằng cách sử dụng tài khoản Book Your Travel của mình để thực hiện một đặt phòng đủ điều kiện của
                        chương trình.</p>
                    <h2 id="tcs_s3" class="bui-f-font-heading"> 3. An toàn và Bảo mật </h2>
                    <p>Book Your Travel tôn trọng sự riêng tư của bạn. Vui lòng xem <a href="javascript::">chính sách bảo
                            mật và cookie</a> của chúng tôi để biết thêm thông tin.
                    </p>
                    <h2 id="tcs_s4" class="bui-f-font-heading"> 4. Miễn phí cho khách hàng, chỉ có Nhà Cung Cấp Chuyến Đi
                        phải trả phí! </h2>
                    <p>Trừ khi được nêu khác đi, dịch vụ của chúng tôi miễn phí đối với khách hàng vì, không giống như nhiều
                        đơn vị khác, chúng tôi sẽ không thu phí Dịch Vụ Chuyến Đi từ bạn hoặc thêm bất kỳ phí (đặt chỗ) bổ
                        sung nào vào giá của Nhà Cung Cấp Chuyến Đi. Bạn sẽ trả Nhà Cung Cấp Chuyến Đi một khoản tương ứng
                        như đã ghi trong Đặt Chỗ Chuyến Đi (cộng với - trong trường hợp chưa bao gồm trong giá – thuế, phí
                        và lệ phí áp dụng tương ứng (nếu có)).</p>
                    <p>Nhà Cung Cấp Chuyến Đi trả hoa hồng (là một tỷ lệ phần trăm nhỏ của giá sản phẩm (ví dụ: giá phòng))
                        cho Book Your Travel sau khi khách đã sử dụng dịch vụ hoặc sản phẩm của Nhà Cung Cấp Chuyến Đi (ví
                        dụ: sau khi khách đã nghỉ tại (và thanh toán cho) chỗ nghỉ). Nhà Cung Cấp Chuyến Đi có thể cải thiện
                        xếp hạng của họ bằng cách tăng phần trăm hoa hồng (Công cụ thúc đẩy sự hiện diện). Việc dùng Công cụ
                        thúc đẩy sự hiện diện (bằng cách tăng phần trăm hoa hồng để có vị trí xếp hạng tốt hơn) là tùy thuộc
                        vào quyết định của Nhà Cung Cấp Chuyến Đi và có thể được sử dụng bất cứ lúc nào và với bất kỳ sản
                        phẩm nào được cung cấp. Thuật toán của bảng xếp hạng sẽ dựa trên mức tăng phần trăm hoa hồng khi xác
                        định Xếp Hạng Mặc Định. Các đối tác ưu tiên trả phần trăm hoa hồng cao hơn để có vị trí xếp hạng tốt
                        hơn.</p>
                    <p>Chỉ những Nhà Cung Cấp Chuyến Đi có mối quan hệ thương mại với Book Your Travel (thông qua hợp đồng)
                        sẽ được xuất hiện trên Kênh (đối với các khuyến mãi B2B và/hoặc B2C cho sản phẩm của họ). Book Your
                        Travel không phải là nền tảng mở (như Amazon hay eBay), nơi mà người dùng cuối có thể đưa sản phẩm
                        của họ trực tuyến (không phải nền tảng C2C); Book Your Travel không cho phép các bên không chuyên
                        cung cấp hay bán sản phẩm của họ trên hoặc thông qua Book Your Travel.</p>
                    <h2 id="tcs_s5" class="bui-f-font-heading"> 5. Thẻ tín dụng hoặc chuyển khoản ngân hàng </h2>
                    <p>Nếu phù hợp và có sẵn, một số Nhà Cung Cấp Chuyến Đi cung cấp cơ hội để Đặt Chỗ Chuyến Đi được thanh
                        toán (toàn bộ hay một phần và theo yêu cầu chính sách thanh toán của Nhà Cung Cấp Chuyến Đi) cho Nhà
                        Cung Cấp Chuyến Đi trong quá trình Đặt Chỗ Chuyến Đi bằng các phương thức thanh toán trực tuyến an
                        toàn (trong giới hạn được cung cấp và hỗ trợ bởi ngân hàng của bạn). Đối với một số sản phẩm và dịch
                        vụ nhất định, Book Your Travel thay mặt Nhà Cung Cấp Chuyến Đi hỗ trợ (thông qua các dịch vụ xử lý
                        thanh toán của bên thứ ba) việc thu thanh toán cho sản phẩm và dịch vụ tương ứng (ví dụ: dịch vụ hỗ
                        trợ thanh toán) (Book Your Travel không bao giờ đóng vai trò hay hoạt động như đơn vị sở hữu tài
                        khoản ngân hàng trong hóa đơn (merchant of record)). Việc thanh toán được thực hiện an toàn từ thẻ
                        tín dụng/ghi nợ hoặc tài khoản ngân hàng của bạn đến tài khoản ngân hàng của nhà cung cấp chỗ nghỉ
                        thông qua đơn vị xử lý thanh toán bên thứ ba. Bất kỳ thanh toán nào được chúng tôi hỗ trợ xử lý cho,
                        và chuyển đến Nhà Cung Cấp Chuyến Đi sẽ, theo từng trường hợp, được tính là (một phần) thanh toán
                        của giá đặt chỗ mà bạn thực hiện cho sản phẩm hay dịch vụ tương ứng trong việc thanh toán cuối cùng
                        (một phần) giá còn nợ và phải trả và bạn không thể khiếu nại về khoản tiền đó.</p>
                    <p>Đối với những khuyến mãi đặc biệt hay giá (không hoàn tiền) nhất định, xin lưu ý rằng Nhà Cung Cấp
                        Chuyến Đi có thể yêu cầu thanh toán được thực hiện trước bằng chuyển khoản ngân hàng (nếu có thể)
                        hoặc bằng thẻ tín dụng, và vì vậy thẻ tín dụng của bạn có thể sẽ được ủy quyền trước hoặc trừ tiền
                        (đôi khi không có lựa chọn hoàn tiền) sau khi thực hiện Đặt Chỗ Chuyến Đi. Vui lòng kiểm tra kỹ chi
                        tiết (đặt chỗ) sản phẩm hay dịch vụ bạn đã chọn để biết về những điều kiện trên trước khi thực hiện
                        Đặt Chỗ Chuyến Đi. Book Your Travel sẽ không có trách nhiệm pháp lý hay có nghĩa vụ với bất kỳ giao
                        dịch (ủy quyền, (cáo buộc) sai hoặc không được phép) thực hiện bởi Nhà Cung Cấp Chuyến Đi và bạn
                        cũng sẽ không khiếu nại bất kỳ khoản tiền hợp lệ hoặc cho phép Nhà Cung Cấp Chuyến Đi trừ trên thẻ
                        tín dụng của bạn (bao gồm giá trả trước, phí vắng mặt và hủy đặt chỗ).</p>
                    <p>Trong trường hợp các bên thứ ba gian lận thẻ tín dụng hoặc sử dụng trái phép thẻ tín dụng của bạn,
                        hầu hết các ngân hàng và công ty thẻ tín dụng sẽ chịu rủi ro và chi trả toàn bộ các chi phí do việc
                        gian lận hay lạm dụng này gây ra, đôi khi có thể dẫn đến việc phải trả khoản khấu trừ (thường được
                        mặc định là 50 EUR (hoặc tương đương theo tiền tệ tại địa phương của bạn)). Trong trường hợp công ty
                        thẻ tín dụng hoặc ngân hàng tính bạn phí khấu trừ do các gian lận trái phép từ đặt chỗ được thực
                        hiện trên Kênh chúng tôi, chúng tôi sẽ trả bạn khoản khấu trừ này, tổng số tiền tối đa 50 EUR (hoặc
                        tương đương theo tiền tệ tại địa phương của bạn). Để được bồi thường, vui lòng đảm bảo rằng bạn báo
                        cáo việc gian lận này đến nhà cung cấp thẻ tín dụng của mình (theo các điều luật và thủ tục báo cáo
                        của công ty này) và liên lạc ngay lập tức với chúng tôi và cung cấp bằng chứng về khoản khấu trừ (ví
                        dụ: chính sách của công ty thẻ tín dụng). Tiền bồi thường này chỉ áp dụng với những thẻ tín dụng mà
                        đặt chỗ được thực hiện qua máy chủ bảo mật của Book Your Travel và việc sử dụng trái phép thẻ tín
                        dụng của bạn là kết quả của lỗi hoặc sơ suất của chúng tôi và không phải là lỗi của bạn khi sử dụng
                        máy chủ bảo mật.</p>
                    <h2 id="tcs_s6" class="bui-f-font-heading"> 6. Thanh toán trước, hủy đặt chỗ, vắng mặt và ghi chú </h2>
                    <p>Qua việc thực hiện Đặt Chỗ Chuyến Đi với một Nhà Cung Cấp Chuyến Đi, bạn chấp nhận và đồng ý chính
                        sách huỷ và vắng mặt tương ứng của Nhà Cung Cấp Chuyến Đi đó, và về bất kỳ điều khoản và điều kiện
                        (cung cấp dịch vụ) bổ sung nào của Nhà Cung Cấp Chuyến Đi mà có thể áp dụng cho Chuyến đi của bạn
                        (bao gồm ghi chú của Nhà Cung Cấp Chuyến Đi được hiển thị trên Kênh chúng tôi và các thông tin quan
                        trọng tương ứng của Nhà Cung Cấp Chuyến Đi), bao gồm các dịch vụ được cung cấp và/hoặc các sản phẩm
                        được cung cấp bởi Nhà Cung Cấp Chuyến Đi. Bạn có thể yêu cầu Nhà Cung Cấp Chuyến Đi cung cấp các
                        điều khoản và điều kiện (cung cấp dịch vụ/giao dịch/sử dụng/vận chuyển) tương ứng của họ. Chính sách
                        huỷ và vắng mặt chung của mỗi Nhà Cung Cấp Chuyến Đi được đăng trên Kênh chúng tôi ở các trang thông
                        tin về Nhà Cung Cấp Chuyến Đi, trong quá trình đặt chỗ và trong email xác nhận hoặc vé (nếu có). Xin
                        lưu ý rằng một số giá, phí hoặc ưu đãi đặc biệt không thể được huỷ bỏ, hoàn tiền hoặc thay đổi. Nhà
                        Cung Cấp Chuyến Đi vẫn có thể thu thuế thành phố/thuế du lịch trong trường hợp vắng mặt hoặc hủy có
                        tính phí. Vui lòng kiểm tra một cách thấu đáo toàn bộ các chi tiết (đặt chỗ) của sản phẩm hoặc dịch
                        vụ đã chọn về những điều kiện như vậy trước khi thực hiện đặt chỗ. Xin lưu ý rằng một Đặt Chỗ Chuyến
                        Đi có yêu cầu đặt cọc hoặc thanh toán trước (toàn bộ hoặc một phần) sẽ có thể bị hủy (mà không cần
                        thông báo hoặc cảnh báo trước) trong trường hợp (các) khoản tiền tương ứng (còn lại) không thể được
                        thu đầy đủ vào ngày thanh toán đã định theo chính sách thanh toán được áp dụng bởi Nhà Cung Cấp
                        Chuyến Đi và đặt chỗ. Chính sách hủy và thanh toán trước có thể thay đổi tùy theo phân khúc, sản
                        phẩm hay dịch vụ của mỗi Chuyến Đi. Vui lòng đọc kỹ ghi chú (nằm dưới loại Chuyến Đi hoặc tại mỗi
                        cuối trang của Nhà Cung Cấp Chuyến Đi trên Kênh chúng tôi) và các thông tin quan trọng trong xác
                        nhận đặt chỗ của bạn về những chính sách bổ sung có thể được áp dụng bởi Nhà Cung Cấp Chuyến Đi (ví
                        dụ: về yêu cầu tuổi, đặt cọc đảm bảo, những điều kiện bổ sung/hủy đặt chỗ dành cho nhóm khách,
                        giường phụ/bữa sáng có tính phí, thú cưng/các loại thẻ chấp nhận). Bạn sẽ chịu trách nhiệm và rủi ro
                        về thanh toán trễ, nhầm lẫn ngân hàng, chi tiết thẻ tín dụng/ghi nợ hoặc không đủ số dư tài khoản và
                        sẽ không được quyền nhận bất cứ tiền hoàn lại nào của phần đã thanh toán trước (không hoàn lại), trừ
                        phi Nhà Cung Cấp Chuyến Đi đồng ý hoặc cho phép khác đi so với chính sách hủy và thanh toán (trước)
                        của họ.</p>
                    <p>Nếu bạn muốn xem lại, chỉnh sửa hoặc huỷ Đặt Chỗ Chuyến Đi, vui lòng làm theo hướng dẫn trong email
                        xác nhận. Xin lưu ý rằng bạn có thể bị tính phí nếu huỷ đặt chỗ theo chính sách hủy, thanh toán
                        (trước) và vắng mặt của Nhà Cung Cấp Chuyến Đi hoặc không có quyền được hoàn lại bất kỳ khoản tiền
                        nào đã trả (trước). Chúng tôi khuyên bạn nên đọc chính sách hủy, thanh toán (trước) hoặc vắng mặt
                        của nhà cung cấp chỗ nghỉ kỹ càng trước khi thực hiện đặt chỗ của mình và hãy nhớ luôn thực hiện các
                        thanh toán sau đó đúng thời hạn như đã được yêu cầu cho đặt chỗ tương ứng.</p>
                    <p>Nếu bạn đến trễ vào ngày nhận phòng/sử dụng dịch vụ hoặc đến vào ngày hôm sau, hãy thông báo (kịp
                        thời/nhanh chóng) với Nhà Cung Cấp Chuyến Đi để họ biết khi nào bạn tới và tránh hủy (Đặt Chỗ)
                        Chuyến Đi của bạn hoặc tính phí vắng mặt. Bộ phận dịch vụ khách hàng của chúng tôi có thể giúp bạn
                        thông báo với Nhà Cung Cấp Chuyến Đi, nếu cần thiết. Book Your Travel không chịu bất kỳ trách nhiệm
                        hoặc nghĩa vụ nào liên quan đến việc bạn tới nhận phòng/sử dụng dịch vụ trễ hoặc hủy phòng/dịch vụ,
                        hay phí vắng mặt mà Nhà Cung Cấp Chuyến Đi yêu cầu bạn thanh toán.</p>
                    <h2 id="tcs_s7" class="bui-f-font-heading"> 7. Thư từ và liên hệ trao đổi (sau này) </h2>
                    <p>Bằng việc hoàn tất Đặt Chỗ Chuyến Đi, bạn đã đồng ý nhận (i) email mà chúng tôi có thể gửi đến bạn
                        không lâu trước ngày đến nơi của bạn, cung cấp cho bạn thông tin về điểm đến của bạn cũng như các
                        thông tin và ưu đãi cụ thể (bao gồm cả những ưu đãi của bên thứ ba mà bạn đã chọn để nhận được những
                        thông tin này) phù hợp với (Đặt Chỗ) Chuyến Đi cũng như điểm đến của bạn và (ii) một email để đánh
                        giá (trải nghiệm của bạn với) Nhà Cung Cấp Chuyến Đi và Dịch Vụ Chuyến Đi sau khi bạn đến, và (iii)
                        một email mà chúng tôi có thể gửi đến bạn ngay sau kỳ lưu trú, mời bạn hoàn tất đơn đánh giá dành
                        cho khách của chúng tôi. Vui lòng xem chính sách bảo mật và cookie của chúng tôi để biết thêm thông
                        tin về việc chúng tôi có thể liên hệ với bạn bằng cách nào.</p>
                    <p>Book Your Travel khước từ bất kỳ nghĩa vụ hoặc trách nhiệm nào đối với bất kỳ liên hệ trao đổi bởi
                        hoặc với Nhà Cung Cấp Chuyến Đi trên hoặc thông qua kênh của mình. Bạn không được hưởng bất cứ quyền
                        lợi nào từ bất kỳ yêu cầu hoặc thông tin trao đổi với Nhà Cung Cấp Chuyến Đi hoặc (dưới bất cứ hình
                        thức nào) xác nhận việc nhận bất kỳ liên hệ trao đổi hoặc yêu cầu nào. Book Your Travel không thể
                        đảm bảo rằng bất kỳ yêu cầu hoặc liên hệ trao đổi nào sẽ được (đầy đủ và kịp thời) nhận/đọc, tuân
                        thủ, thực hiện hoặc chấp nhận bởi Nhà Cung Cấp Chuyến Đi.</p>
                    <p>Để hoàn thành và đảm bảo Đặt Chỗ Chuyến Đi của bạn một cách hợp lệ, bạn cần phải sử dụng địa chỉ
                        email chính xác. Chúng tôi không có nghĩa vụ hoặc chịu trách nhiệm (và không có nghĩa vụ để xác
                        minh) đối với bất kỳ địa chỉ email sai hoặc sai chính tả hoặc không chính xác hoặc số điện thoại (di
                        động) hoặc số thẻ tín dụng sai hoặc không chính xác.</p>
                    <p>Bất kỳ khiếu nại hoặc phàn nàn nào về Book Your Travel hoặc liên quan đến Dịch Vụ Chuyến Đi phải được
                        gửi đến kịp thời, trong vòng 30 ngày sau ngày dự định sử dụng sản phẩm hoặc dịch vụ (ví dụ: ngày trả
                        phòng). Sau kỳ hạn 30 ngày, mọi khiếu nại hoặc phàn nàn có thể sẽ bị từ chối và người khiếu nại sẽ
                        phải từ bỏ quyền nhận tiền bồi thường (cho chi phí hay hư hại).</p>
                    <p>Vì giá và tình trạng phòng trống luôn được điều chỉnh và cập nhật, chúng tôi khuyên bạn nên chụp lại
                        màn ảnh khi thực hiện đặt phòng để hỗ trợ cho khiếu nại của mình (nếu cần).</p>
                    <p></p>
                    <h2 id="tcs_s8" class="bui-f-font-heading"> 8. Thứ hạng, chương trình chỗ nghỉ ưu tiên, sao và đánh giá
                        của khách </h2>
                    <p>Chúng tôi muốn hiển thị kết quả tìm kiếm phù hợp với bạn bằng cách cung cấp xếp hạng mặc định đã được
                        cá nhân hóa của Nhà cung cấp chuyến đi trên Nền tảng của chúng tôi. Bạn có thể xem xếp hạng mặc định
                        này, sử dụng tính năng lọc và sắp xếp theo thứ tự xếp hạng khác, nhờ đó có khả năng ảnh hưởng đến
                        việc hiển thị kết quả tìm kiếm để nhận thứ tự xếp hạng dựa trên các tiêu chí khác. Chúng tôi sử dụng
                        nhiều thuật toán để tạo ra kết quả xếp hạng mặc định, quá trình này sẽ không ngừng được cải tiến.
                    </p>
                    <p>Book Your Travel đã xác định các tham số sau có tương quan chặt chẽ nhất với việc giúp bạn tìm được
                        Nhà cung cấp chuyến đi phù hợp và do đó ưu tiên các tham số đó trong thuật toán (tham số chính):
                        lịch sử tìm kiếm cá nhân của bạn, tỷ lệ "nhấp chuột" từ trang tìm kiếm đến trang của nhà cung cấp
                        chuyến đi hoặc chỗ nghỉ (click through rate - "CTR"), số lượng đặt phòng liên quan đến số lượt truy
                        cập vào trang Nhà cung cấp chuyến đi trên Nền tảng ("Chuyển đổi"), số lượng đặt phòng gộp (bao gồm
                        hủy đặt phòng) và số lượng đặt phòng thuần (không bao gồm hủy đặt phòng) của Nhà cung cấp chuyến đi.
                        Chuyển đổi và CTR có thể bị ảnh hưởng bởi các yếu tố khác nhau (độc lập) bao gồm điểm đánh giá (cả
                        điểm tổng hợp và thành phần), tình trạng phòng trống, chính sách, giá cả (cạnh tranh), chất lượng
                        nội dung và các đặc điểm nhất định của Nhà cung cấp chuyến đi. Tỷ lệ hoa hồng được trả bởi Nhà cung
                        cấp chuyến đi hoặc các lợi ích khác cho chúng tôi (ví dụ: thông qua các thỏa thuận thương mại với
                        Nhà cung cấp chuyến đi hoặc đối tác chiến lược) cũng có thể ảnh hưởng đến xếp hạng mặc định, cũng
                        như lịch sử thanh toán đúng hạn của Nhà cung cấp chuyến đi. Nhà cung cấp chuyến đi cũng có thể ảnh
                        hưởng đến thứ hạng của mình bằng cách tham gia vào một số chương trình nhất định - đôi khi có thể
                        được cập nhật - chẳng hạn như chương trình Genius, ưu đãi, Chương trình Đối tác Ưu tiên và công cụ
                        thúc đẩy sự hiện diện (với hai chương trình sau Nhà cung cấp chuyến đi phải trả phí hoa hồng cao hơn
                        cho chúng tôi).</p>
                    <p>Thứ hạng sao của chỗ nghỉ hiển thị trên Book Your Travel không được quyết định bởi Book Your Travel.
                        Chính chỗ nghỉ tự quyết định thứ hạng sao của họ hoặc thứ hạng sao này được quyết định bởi nhà cung
                        cấp thứ hạng sao (khách quan) bên thứ ba độc lập. Các ưu đãi được hiển thị dựa theo số lượng sao
                        (thấp đến cao hoặc cao đến thấp) mà các nhà cung cấp thông báo cho Book Your Travel. Tùy theo tình
                        trạng và quy định (địa phương), việc phân loại sao sẽ được chỉ định cho bên thứ ba (độc lập), ví dụ
                        tổ chức đánh giá khách sạn (chính thức), hoặc dựa trên ý kiến của chính nhà cung cấp chỗ nghỉ, bất
                        kể các tiêu chuẩn khách quan. Book Your Travel không áp đặt nghĩa vụ bắt buộc về thứ hạng sao và
                        cũng không xem xét các thứ hạng này. Nhìn chung, phân loại sao là hình thức chỗ nghỉ so sánh với các
                        yêu cầu pháp lý (nếu áp dụng) hoặc, nếu không được quản lý, tiêu chuẩn trong ngành (thường thấy) về
                        các khía cạnh như giá, tiện nghi và dịch vụ cung cấp (những tiêu chuẩn và yêu cầu này có thể thay
                        đổi tùy theo quốc gia và tổ chức).</p>
                    <p>Để giúp khách hàng dễ dàng tìm thấy lựa chọn phù hợp với sở thích du lịch của họ, Book Your Travel có
                        thể chỉ định đánh giá chất lượng, được xác định bởi Book Your Travel và hiển thị dưới dạng các ô màu
                        vàng, cho một số chỗ nghỉ nhất định. Để đảm bảo khả năng so sánh, đánh giá chất lượng được dựa trên
                        nhiều (hơn 400) tính năng có thể được phân thành 5 hạng mục chính: (i) tiện nghi chỗ nghỉ/tiện nghi
                        phòng/dịch vụ được cung cấp bởi chỗ nghỉ trên Book Your Travel, (ii) cấu tạo bố cục chỗ nghỉ như
                        kích thước đơn vị, số lượng phòng và sức chứa, (iii) số lượng và chất lượng hình ảnh được đăng tải
                        bởi chỗ nghỉ, (iv) điểm đánh giá trung bình từ khách cũng như một số điểm phụ, chẳng hạn như độ sạch
                        sẽ, vì những điều này được chứng minh là đặc biệt hữu ích cho khách hàng trong việc đánh giá chất
                        lượng của một số chỗ nghỉ nhất định và (v) dữ liệu lịch sử đặt phòng ẩn danh và tổng hợp (ví dụ: để
                        đánh giá xếp hạng sao của các chỗ nghỉ đã đặt). Chúng tôi sử dụng những tính năng này để đúc kết ra
                        các mẫu thống kê. Dựa theo những dữ liệu đầu vào này, một phân tích trên nền tảng học máy được xử lý
                        và tự động tính toán ra đánh giá chất lượng (từ 1-5, được hiển thị bằng cách sử dụng 1-5 ô màu vàng
                        cạnh tên chỗ nghỉ) và trao cho chỗ nghỉ.</p>
                    <p>Chỉ có những khách hàng đã đến nghỉ tại Chỗ Nghỉ mới được Book Your Travel mời đánh giá về kỳ lưu trú
                        tại chỗ nghỉ đó và cho điểm một số khía cạnh nhất định về kỳ lưu trú của họ hoặc nhận một yêu cầu
                        đánh giá điểm trong kỳ lưu trú của họ. Đánh giá hoàn chỉnh của khách (bao gồm điểm đánh giá trong kỳ
                        lưu trú của bạn) có thể được (a) tải lên trang thông tin của Nhà Cung Cấp Chuyến Đi tương ứng trên
                        Kênh chúng tôi chỉ cho mục đích là thông báo cho các khách hàng (tương lai) ý kiến của bạn về (cấp
                        độ) và chất lượng phục vụ của Nhà Cung Cấp Chuyến Đi và (b) Book Your Travel có toàn quyền quyết
                        định sử dụng và đăng lên (một phần hoặc toàn bộ) trên Kênh chúng tôi hoặc các kênh mạng xã hội, bản
                        tin, khuyến mãi đặc biệt, ứng dụng hoặc những kênh khác do Book Your Travel và các đối tác của chúng
                        tôi sở hữu, điều hành, sử dụng hoặc quản lý (ví dụ: cho mục đích tiếp thị, quảng bá hoặc cải thiện
                        dịch vụ của chúng tôi). Để cung cấp và duy trì đánh giá gần đây (và do đó có liên quan), đánh giá
                        chỉ có thể được gửi trong một khoảng thời gian giới hạn (3 tháng) sau kỳ lưu trú và mỗi đánh giá sẽ
                        chỉ được hiển thị trong một khoảng thời gian giới hạn (24 tháng) sau khi đăng. Thứ hạng mặc định của
                        các bài đánh giá là theo ngày gửi cùng với một số tiêu chí khác (như ngôn ngữ, đánh giá có nhận
                        xét), trong khi đánh giá một khách hàng [luôn luôn] gửi các đánh giá toàn diện và chi tiết (còn gọi
                        là "Người tiên phong") có thể được xếp hạng trên đầu trang. Bạn có tùy chọn để lựa chọn các hình
                        thức xếp hạng và lọc khác nhau (ví dụ: theo đối tượng, ngày, ngôn ngữ, điểm số). Book Your Travel
                        cho phép Nhà Cung Cấp Chuyến Đi viết phản hồi cho bài đánh giá. Chúng tôi bảo lưu quyền điều chỉnh,
                        từ chối hoặc xóa các bài đánh giá nếu chúng tôi tự nhận thấy rằng bài đánh giá đó vi phạm chính sách
                        về đánh giá của chúng tôi. Book Your Travel không bồi thường hoặc khen thưởng khách hàng cho việc
                        hoàn thành đánh giá. Bài đánh giá dành cho khách nên được xem như một khảo sát và không bao gồm bất
                        cứ dạng ưu đãi, chào mời hoặc quyền lợi (mang tính thương mại) nào. Book Your Travel cam kết sẽ nỗ
                        lực hết sức để theo dõi và xóa các bài đánh giá có chứa những lời lẽ tục tĩu hoặc đề cập tới tên của
                        một cá nhân hoặc đến hàng hoá bị đánh cắp.</p>
                    <p>Book Your Travel sẽ không chấp nhận các đánh giá bao gồm: </p>
                    <ul>
                        <li>Nội dung thô tục, khiêu dâm, kích động thù địch, phân biệt đối xử, đe dọa, bạo lực</li>
                        <li>Nhắc tới tên đầy đủ, công kích mang tính cá nhân đối với nhân viên</li>
                        <li>Tuyên truyền các hoạt động bất hợp pháp (ví dụ: ma túy, mại dâm)</li>
                        <li>Tên các trang web, email và địa chỉ, số điện thoại và thông tin thẻ tín dụng</li>
                        <li>Các bình luận chính trị nhạy cảm</li>
                    </ul>
                    <p></p>
                    <p>Book Your Travel và Nhà Cung Cấp Chuyến Đi, mỗi bên sẽ có quyền chấm dứt mối quan hệ vì bất kỳ lý do
                        nào (bao gồm trường hợp vi phạm hợp đồng hoặc (nộp đơn) tuyên bố phá sản) kèm theo thông báo trước
                        như đã thống nhất giữa các bên.</p>
                    <h2 id="tcs_s9" class="bui-f-font-heading"> 9. Khước từ quyền lợi </h2>
                    <p>Tuỳ vào các giới hạn được quy định bởi những điều khoản và điều kiện này và theo mức độ luật pháp cho
                        phép, chúng tôi sẽ chỉ chịu trách nhiệm pháp lý cho các tổn hại trực tiếp mà Quý vị thật sự phải
                        gánh chịu, chi trả hoặc phát sinh do sự thiếu sót của chúng tôi khi cung cấp dịch vụ, tối đa bằng
                        tổng số tiền của chi phí đặt tổng cộng của Quý vị như đã ghi trong email xác nhận Đặt Chỗ Chuyến Đi
                        (dù là cho một trường hợp hay một chuỗi các sự kiện liên quan đến nhau).</p>
                    <p>Tuy nhiên, đến mức độ luật pháp cho phép, chúng tôi hoặc bất kỳ văn phòng, giám đốc, nhân viên, người
                        đại diện, công ty con, công ty liên kết, nhà phân phối, đối tác (phân phối) liên kết, người được cấp
                        giấy phép, đại lý của chúng tôi hoặc bất kỳ ai khác có liên quan đến việc tạo ra, tài trợ, quảng bá
                        hoặc giúp trang web và các nội dung trên đó được hiển thị sẽ chịu trách nhiệm pháp lý cho (i) bất kỳ
                        mất mát hoặc tổn hại nào đặc biệt, do bị phạt, là hệ quả hay gián tiếp, việc mất sản xuất, mất lợi
                        nhuận, mất thu nhập, mất hợp đồng, mất mát hoặc tổn hại đến sự tín nhiệm hoặc danh tiếng, mất quyền
                        yêu cầu, (ii) bất kỳ sự thiếu chính xác nào liên quan đến thông tin (miêu tả) (bao gồm giá phòng,
                        tình trạng phòng và đánh giá xếp hạng) của Nhà Cung Cấp Chuyến Đi có trên Kênh chúng tôi, (iii) các
                        dịch vụ được cung cấp hay sản phẩm được chào bán bởi Nhà Cung Cấp Chuyến Đi hoặc các đối tác kinh
                        doanh khác (iv) bất kỳ thiệt hại, mất mát, tổn thất chi phí (trực tiếp, gián tiếp, là hệ quả hoặc do
                        bị phạt) nào Quý vị phải chịu, phát sinh hay thanh toán, thi hành theo, xuất phát từ hoặc liên quan
                        đến việc sử dụng, không thể sử dụng hoặc chậm trễ của Kênh chúng tôi hoặc (v) bất kỳ sự tổn hại,
                        thiệt mạng (cá nhân), tổn thất về tài sản hoặc các tổn hại, mất mát hoặc hao tổn chi phí khác (trực
                        tiếp, gián tiếp, đặc biệt, là hệ quả hoặc bị phạt) mà Quý vị phải chịu, phát sinh hay thanh toán, dù
                        là do các đạo luật (về mặt pháp lý), sai sót, vi phạm, sơ suất (nói chung), cố tình làm sai, bỏ sót,
                        không thực hiện nghĩa vụ, diễn đạt sai, việc làm gây hại hoặc nghĩa vụ pháp lý nghiêm ngặt bởi hoặc
                        (hoàn toàn hay một phần) quy cho Nhà Cung Cấp Chuyến Đi hoặc bất cứ đối tác kinh doanh nào của chúng
                        tôi (bao gồm nhân viên, giám đốc, viên chức, đại lý, đại diện, các thầu phụ hoặc các công ty liên
                        kết) mà sản phẩm hoặc dịch vụ của họ được làm cho có sẵn, cung cấp, quảng cáo (một cách trực tiếp
                        hoặc gián tiếp) qua hoặc trên Kênh chúng tôi, bao gồm bất kỳ yêu cầu huỷ phòng (một phần), đặt phòng
                        quá tải, đình công, sự kiện bất khả kháng hoặc bất kỳ trường hợp nào khác nằm ngoài quyền kiểm soát
                        của chúng tôi.</p>
                    <p>Book Your Travel không chịu trách nhiệm (và từ chối bất kỳ nghĩa vụ nào) đối với việc sử dụng, tính
                        hợp lệ, chất lượng, tính phù hợp, tính thích hợp và tiết lộ về Chuyến Đi và không đưa ra thông tin
                        mô tả, đảm bảo hay điều kiện nào liên quan tới khía cạnh này, cho dù có ngụ ý, theo quy định của
                        pháp luật hoặc không, bao gồm bất kỳ bảo đảm ngụ ý về khả năng thương mại, tiêu đề, không vi phạm
                        hoặc phù hợp với một mục đích cụ thể. Bạn xác nhận và đồng ý rằng Nhà Cung Cấp Chuyến Đi có liên
                        quan chịu trách nhiệm hoàn toàn và chịu mọi trách nhiệm và nghĩa vụ đối với Chuyến Đi (bao gồm bất
                        kỳ bảo đảm và thông tin mô tả nào của Nhà Cung Cấp Chuyến Đi). Book Your Travel không phải là người
                        bán (lại) Chuyến Đi. Phàn nàn hoặc khiếu nại đối với Chuyến Đi (bao gồm liên quan đến giá (đặc
                        biệt/khuyến mãi), chính sách hoặc yêu cầu cụ thể của Khách hàng) sẽ do Nhà Cung Cấp Chuyến Đi xử lý.
                        Book Your Travel không chịu trách nhiệm và từ chối bất kỳ nghĩa vụ nào về những phàn nàn, khiếu nại
                        và trách nhiệm pháp lý (về sản phẩm).</p>
                    <p>Cho dù Nhà Cung Cấp Chuyến Đi đã thu tiền Chuyến ĐI của bạn hoặc nếu chúng tôi hỗ trợ việc thanh toán
                        tiền hoặc phí (Chuyến Đi) của bạn, bạn đồng ý và xác nhận rằng trong mọi trường hợp, Nhà Cung Cấp
                        Chuyến Đi luôn có trách nhiệm thu, giữ, gửi giấy báo chuyển tiền và trả khoản thuế tương ứng với
                        tổng giá và phí (Chuyến Đi) cho cơ quan thu thuế. Book Your Travel không có trách nhiệm pháp lý hay
                        có nghĩa vụ phải gửi giấy báo chuyển tiền, thu, giữ hoặc trả thuế cho tiền hoặc phí (Chuyến Đi) cho
                        đơn vị thu thuế tương ứng. Book Your Travel không đóng vai trò như người sở hữu tài khoản ngân hàng
                        trong hóa đơn (merchant of record) cho bất kỳ sản phẩm hoặc dịch vụ nào cung cấp trên Kênh.</p>
                    <p>Bằng cách đăng tải ảnh chụp/ hình ảnh lên hệ thống của chúng tôi (ví dụ đăng kèm theo đánh giá chỗ
                        nghỉ), bạn xác nhận, đảm bảo và đồng ý rằng bạn sở hữu quyền bản quyền của ảnh chụp/ hình ảnh đó và
                        bạn đồng ý rằng Book Your Travel có thể sử dụng ảnh chụp/ hình ảnh đã đăng đó trên trang web (di
                        động) và ứng dụng của mình, và trong các ấn phẩm xuất bản và tài liệu quảng cáo theo cách Book Your
                        Travel cho rằng phù hợp. Bạn trao cho Book Your Travel quyền không độc quyền, toàn cầu, không thể
                        thu hồi, vô điều kiện, vĩnh viễn và giấy phép sử dụng, tái sản xuất, hiển thị, sản xuất, phân phối,
                        cấp phụ phép, truyền tin và làm cho có sẵn đối với ảnh chụp/ hình ảnh đó theo cách Book Your Travel
                        cho là phù hợp. Bằng cách đăng tải những ảnh chụp/ hình ảnh này, người đăng (các) ảnh chấp nhận toàn
                        bộ trách nhiệm pháp lý và đạo đức của tất cả và mọi khiếu nại pháp lý bất kỳ từ bên thứ ba bất kỳ
                        (bao gồm, nhưng không giới hạn, chủ chỗ nghỉ) do việc Book Your Travel đăng và sử dụng những ảnh
                        chụp/ hình ảnh đó. Book Your Travel không sở hữu hoặc ủng hộ các ảnh chụp/ hình ảnh được đăng. Tính
                        chân thật, sự có giá trị và quyền sử dụng tất cả những ảnh chụp/ hình ảnh là do người đăng ảnh chịu
                        trách nhiệm, và không phải là trách nhiệm của Book Your Travel. Book Your Travel khước từ mọi trách
                        nhiệm và nghĩa vụ pháp lý đối với các hình ảnh được đăng. Người đăng ảnh phải đảm bảo rằng ảnh chụp/
                        hình ảnh không chứa bất kỳ loại virus, Trojan horse hoặc tập tin bị nhiễm virus và sẽ không chứa bất
                        cứ nội dung/ tài liệu đồi trụy, phạm pháp, khiêu dâm, xúc phạm, chống đối hoặc nội dung không phù
                        hợp và không vi phạm bất cứ quyền (sở hữu trí tuệ, bản quyền hoặc bảo mật) nào của bên thứ ba. Mọi
                        ảnh chụp/ hình ảnh không thỏa mãn các tiêu chí nêu trên sẽ không được đăng và/ hoặc sẽ bị Book Your
                        Travel gỡ bỏ/ xóa bất kỳ lúc nào mà không cần báo trước.</p>
                    <h2 id="tcs_s10" class="bui-f-font-heading"> 10. Quyền sở hữu trí tuệ </h2>
                    <p>Trừ khi được nêu khác đi, phần mềm cần có cho các dịch vụ của chúng tôi, hiện có hoặc được sử dụng
                        bởi Kênh chúng tôi và các quyền lợi về tài sản trí tuệ (bao gồm cả bản quyền) cho những nội dung và
                        thông tin cũng như tài liệu trên Kênh chúng tôi đều được sở hữu bởi Book Your Travel B.V. và các Nhà
                        Cung Cấp Chuyến Đi hoặc nhà cung cấp.</p>
                    <p>Book Your Travel có quyền sở hữu độc quyền tất cả các quyền lợi, quyền hạn và lợi ích trong và đối
                        với (tất cả quyền sở hữu trí tuệ của) (toàn bộ giao diện và hoạt động (bao gồm cơ sở hạ tầng) của
                        Kênh nơi dịch vụ được thực hiện (bao gồm các đánh giá của khách và nội dung được thông dịch) và bạn
                        không được quyền sao chép, xóa, tạo đường dẫn (liên kết/ sâu) đến, xuất bản, quảng cáo, tiếp thị,
                        tích hợp, sử dụng, kết hợp hoặc sử dụng nội dung (bao gồm các nội dung được dịch đó và đánh giá của
                        khách) hoặc thương hiệu của chúng tôi mà không có sự cho phép chính thức bằng văn bản của chúng tôi.
                        Trong trường hợp bạn sử dụng (một phần hoặc toàn bộ) hoặc kết hợp nội dung (được thông dịch) của
                        chúng tôi (bao gồm đánh giá của khách) hoặc nếu không sở hữu bất kỳ quyền sở hữu trí tuệ nào trong
                        Kênh hoặc bất cứ nội dung (được thông dịch) hoặc đánh giá của khách, tại nay bạn giao quyền, chuyển
                        đổi và trao tất cả quyền sở hữu trí tuệ đó cho Book Your Travel. Bất cứ hình thức sử dụng bất hợp
                        pháp hoặc các hành động hoặc hành vi được nhắc đến phía trên đều được cho là vi phạm vật chất đến
                        quyền sở hữu trí tuệ của chúng tôi (bao gồm bản quyền và quyền cơ sở dữ liệu).</p>
                    <h2 id="tcs_s11" class="bui-f-font-heading"> 11. Luật hiện hành, quyền tài phán và giải quyết tranh chấp
                    </h2>
                    <p>Những điều kiện và điều khoản này cũng như quy định về các dịch vụ của chúng tôi sẽ được quản lý và
                        phân tích theo luật pháp Hà Lan. Mặc dù lựa chọn luật nói trên, một thể nhân sử dụng bất kỳ dịch vụ
                        nào của chúng tôi cho mục đích có thể được coi là nằm ngoài tính chất thương mại hoặc nghề nghiệp
                        của mình (sau đây còn được gọi là "khách hàng") có thể dựa vào các quy định bắt buộc của luật pháp
                        đất nước nơi khách hàng cư trú (chẳng hạn, các điều khoản, tuân theo với các quy tắc lựa chọn luật
                        pháp của quốc gia nói trên, phải được áp dụng bất kể điều khoản của luật lựa chọn này; sau đây gọi
                        là "Quy Định Bắt Buộc"). Bất kỳ tranh chấp nào xuất phát từ những điều kiện và điều khoản chung này
                        cũng như từ các dịch vụ của chúng tôi sẽ được đệ trình đến các toà án có thẩm quyền ở Amsterdam, Hà
                        Lan. Mặc dù có điều khoản về quyền tài phán như trên, khách hàng cũng có thể đưa ra các thủ tục tố
                        tụng dựa trên việc thực thi Quy Định Bắt Buộc tương ứng có liên quan tại tòa án ở quốc gia nơi khách
                        hàng cư trú, và các vụ kiện chống lại khách hàng chỉ có thể được đưa ra tại các tòa án ở quốc gia
                        nơi khách hàng cư trú.
                        Cho các khách hàng (trong Khu Vực Kinh Tế Châu Âu): Chúng tôi khuyên bạn trước tiên hãy thông báo
                        cho chúng tôi về bất kỳ khiếu nại nào bằng cách liên hệ với Dịch Vụ Khách Hàng của chúng tôi. Nếu
                        điều này không giải quyết được khiếu nại của bạn, bạn có thể nộp khiếu nại của qua nền tảng ODR của
                        Ủy Ban Châu Âu (European Commission). Bạn có thể tìm thấy nền tảng giải quyết tranh chấp trực tuyến
                        này tại đây: http://ec.europa.eu/odr.</p>
                    <p>Phiên bản tiếng Anh nguyên gốc của những điều khoản và điều kiện này có thể đã được dịch sang các
                        ngôn ngữ khác. Bản dịch chỉ theo hình thức và mang tính chất giấy tờ, và Quý vị không thể đòi được
                        bất kỳ quyền lợi nào từ bản dịch. Trong trường hợp có tranh luận về nội dung hoặc cách diễn giải
                        những điều khoản và điều kiện này, hay có mâu thuẫn hoặc sự không nhất quán giữa phiên bản tiếng Anh
                        và bản của ngôn ngữ nào khác về những điều khoản và điều kiện này, phiên bản tiếng Anh sẽ được áp
                        dụng, lưu hành và mang tính quyết định, đến mức độ luật pháp cho phép. Phiên bản tiếng Anh có trên
                        Kênh chúng tôi (bằng cách chọn ngôn ngữ Tiếng Anh) hoặc sẽ được gửi đến nếu Quý vị yêu cầu bằng văn
                        bản.</p>
                    <p>Nếu bất kỳ quy định nào của những điều khoản và điều kiện này bị hoặc trở nên không có hiệu lực,
                        không thể thực thi hoặc không còn ràng buộc nữa, Quý vị sẽ vẫn bị giới hạn bởi tất cả những quy định
                        khác về việc này. Trong trường hợp đó, quy định không có hiệu lực như vậy sẽ không vì thế mà được
                        thi hành đến mức độ cao nhất được cho phép bởi luật pháp áp dụng, và Quý vị sẽ ít nhất phải đồng ý
                        chấp nhận kết quả tương tự như quy định không có hiệu lực, không thể thực thi hoặc không còn ràng
                        buộc, theo các nội dung và mục đích của những quy định và điều khoản này như đã cung cấp.</p>
                    <h2 id="tcs_s12" class="bui-f-font-heading"> 12. Về Book Your Travel và các công ty hỗ trợ </h2>
                    <p>Dịch Vụ Chuyến Đi được cung cấp bởi Book Your Travel B.V., công ty trách nhiệm hữu hạn được thành lập
                        theo luật pháp Hà Lan và có văn phòng công ty tại Herengracht 597, 1017 CE Amsterdam, Hà Lan và đăng
                        ký kinh doanh tại Phòng Thương Mại ở Amsterdam với số đăng ký 31047344. Số đăng ký thuế GTGT của
                        chúng tôi là NL805734958B01.</p>
                    <p>Book Your Travel có trụ sở chính ở Amsterdam, Hà Lan và được hỗ trợ bởi các nhóm công ty liên kết
                        (gọi là "các công ty hỗ trợ") trên toàn thế giới. Các công ty hỗ trợ này chỉ đóng vai trò hỗ trợ nội
                        bộ đối với và cho lợi ích của Book Your Travel. Một số công ty hỗ trợ nhất định được giao nhiệm vụ
                        cung cấp dịch vụ hỗ trợ chăm sóc khách hàng giới hạn (chỉ qua điện thoại). Các công ty hỗ trợ không
                        sở hữu bất kỳ Kênh nào (và không kiểm soát, quản lý, bảo trì và lưu trữ (host) Kênh dưới bất kỳ hình
                        thức nào). Các công ty hỗ trợ này không có bất kỳ khả năng hay thẩm quyền nào để cung cấp dịch vụ,
                        để đại diện cho Book Your Travel hoặc tham gia vào bất kỳ hợp đồng nào dưới tên của, cho hay thay
                        mặt Book Your Travel. Bạn không có bất kỳ mối quan hệ (pháp lý hoặc theo hợp đồng) với các công ty
                        hỗ trợ. Các công ty hỗ trợ không hoạt động và không được ủy quyền hành động dưới dạng bất kỳ đại lý
                        dịch vụ hoặc xử lý thông tin nào của Book Your Travel. Book Your Travel không chấp thuận hoặc thừa
                        nhận văn phòng tại bất kỳ nơi, địa điểm hoặc văn phòng nào trên toàn thế giới (cũng không tại văn
                        phòng của các công ty hỗ trợ), ngoài văn phòng được đăng ký của công ty ở Amsterdam.</p>
                </section>
                <!--//full content-->
            </div>
            <!--//main content-->
        </div>
    </div>
    <!--//main-->
@endsection
