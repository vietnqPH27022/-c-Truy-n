<!-- content  -->
<div class="py-4 w-full">
    <div class="">
        <h1 class="text-xl font-medium p-4">Truyện cần sửa lại</h1>
    </div>
    <div class="p-4">
        <form action="index.php?act=search_wait" method="POST" class="">
            <input placeholder="Mời nhập tên truyện muốn tìm kiếm" type="text" name="key_search" class="w-[300px] h-[44px]  border border-solid border-yellow-400">
            <select name="category_id" class="p-2 px-4 rounded-md h-[44px]">
                <option value="0" selected>Tất cả</option>
                <?php
                $list_all_loai = load_all_loai();
                foreach ($list_all_loai as $KEY => $VAL) {
                ?>
                    <option class="font-medium text-xl" value="<?= $VAL['id'] ?>"><?= $VAL['name'] ?></option>
                <?php } ?>
            </select>
            <button class="bg-orange-400 hover:bg-blue-500 hover:text-orange-400 font-medium text-white p-2 px-4  border-solid border border-yellow-400" name="btn_search">Tìm kiếm</button>
        </form>
    </div>
    <div class="p-4">
        <table class="table-auto w-full">
            <thead class="text-xl border-2">
                <tr class="bg-red-200 ">
                    <th class="p-2 border-2">Mã truyện</th>
                    <th class="p-2 border-2">Tên truyện</th>
                    <th class="p-2 border-2">Tác giả</th>
                    <th class="p-2 border-2">Giới thiệu</th>
                    <th class="p-2 border-2">Ngày giờ</th>
                    <th class="p-2 border-2">Loại</th>
                    <th class="p-2 border-2">Ảnh bìa</th>
                    <th class="p-2 border-2">Duyệt</th>
                    </th>
                </tr>
            </thead>
            <tbody class="font-medium text-lg border-2">
                <?php
                foreach ($comic_select_all_bystatus_3 as $key => $value) {
                    extract($value);
                    $sua_truyen = "index.php?act=sua_truyen&id=" . $id;
                    $again = "index.php?act=again&id=" . $id;
                    // $noo = "index.php?act=no&id=" . $id;
                ?>
                    <tr class="text-center  ">
                        <td class="p-2 border-2 border-solid "><?php echo $id ?></td>
                        <td class="p-2 border-2 border-solid "><?php echo $name ?></td>
                        <td class="p-2 border-2 border-solid "><?php echo $author ?></td>
                        <td class="p-2 border-2 border-solid"><?php echo $intro ?></td>
                        <td class="p-2 border-2 border-solid "><?php echo $date ?></td>
                        <td class="p-2 border-2 border-solid "><?php echo $ca_name ?></td>
                        <td class="p-2 border-2 border-solid "><img class="w-[400px] h-[200px]" src="../content/uploads/cover_img/<?php echo $img_name ?>" /></td>

                        <td class="p-2 border-2 border-solid ">
                            <!-- <form action="" method="post"></form> -->
                            <a href="<?php echo $sua_truyen ?>"> <button class="p-2 px-4 bg-orange-400 rounded-md text-white hover:bg-blue-500  hover:text-orange-400 ">sửa</button></a> <br>
                            <a href="<?php echo $again ?>"> <button class="p-2 px-4 bg-orange-400 rounded-md text-white hover:bg-blue-500  hover:text-orange-400 mt-2">đăng lại</button></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>