-- ==========================================
-- 1. KHỞI TẠO CƠ SỞ DỮ LIỆU
-- ==========================================
CREATE DATABASE IF NOT EXISTS quanly_cuahang;
USE quanly_cuahang;

-- ==========================================
-- 2. ĐỊNH NGHĨA CẤU TRÚC BẢNG
-- ==========================================

-- Bảng thông tin nhà cung cấp
CREATE TABLE NHACUNGCAP (
    id_ncc VARCHAR(2) PRIMARY KEY,
    ten_ncc VARCHAR(40),
    nuoc_sx VARCHAR(20)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Bảng danh sách sản phẩm
CREATE TABLE SANPHAM (
    id_sp VARCHAR(4) PRIMARY KEY,
    ten_sp VARCHAR(40),
    id_ncc VARCHAR(2),
    nam_sx INT,
    don_gia INT,
    FOREIGN KEY (id_ncc) REFERENCES NHACUNGCAP(id_ncc)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Bảng thông tin người mua
CREATE TABLE NGUOIMUA (
    id_nm VARCHAR(4) PRIMARY KEY,
    ho_ten VARCHAR(30),
    nam_sinh INT,
    sdt VARCHAR(10),
    dia_chi VARCHAR(50)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Bảng chi tiết đơn hàng
CREATE TABLE DONHANG (
    so_dh VARCHAR(3),
    id_nm VARCHAR(4),
    id_sp VARCHAR(4),
    so_luong INT,
    tong_tien INT,
    PRIMARY KEY (so_dh, id_nm, id_sp),
    FOREIGN KEY (id_nm) REFERENCES NGUOIMUA(id_nm),
    FOREIGN KEY (id_sp) REFERENCES SANPHAM(id_sp)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ==========================================
-- 3. NHẬP DỮ LIỆU
-- ==========================================

-- Dữ liệu nhà cung cấp
INSERT INTO NHACUNGCAP (id_ncc, ten_ncc, nuoc_sx) VALUES 
('DE', 'DELL', 'Hoa kỳ'),
('AS', 'ASUS', 'Đài Loan'),
('LE', 'LENOVO', 'Trung Quốc'),
('TO', 'TOSHIBA', 'Nhật bản');

-- Dữ liệu sản phẩm
INSERT INTO SANPHAM (id_sp, ten_sp, id_ncc, nam_sx, don_gia) VALUES 
('DE01', 'Dell Vostro', 'DE', 2015, 650),
('DE02', 'Del Inspiron', 'DE', 2015, 550),
('AS01', 'Asus TUF', 'AS', 2017, 520),
('AS02', 'Asus Vivobook', 'AS', 2017, 580),
('LE01', 'Lenovo Thinkpad', 'LE', 2019, 750),
('TO01', 'Toshiba Satellite', 'TO', 2014, 630),
('LE02', 'Lenovo Legion', 'LE', 2020, 540),
('LE03', 'Lenovo Yoga', 'LE', 2020, 600);

-- Dữ liệu người mua
INSERT INTO NGUOIMUA (id_nm, ho_ten, nam_sinh, sdt, dia_chi) VALUES 
('K001', 'Nguyễn Thị Lan', 1980, '0913123456', 'Bạc Liêu'),
('K002', 'Ngô Thanh Minh', 1985, '0913024357', 'Vĩnh Lợi'),
('K003', 'Lâm Văn Thanh', 1979, '0913124357', 'Giá Rai'),
('K004', 'Dương Thu Thủy', 1995, '0913024358', 'Hồng Dân'),
('K005', 'Nguyễn Thị Xuân', 1987, '0903223344', 'Phước Long'),
('K006', 'Huỳnh Mẫn Đạt', 1975, '0989122112', 'Bạc Liêu'),
('K007', 'Lâm Hoài Bảo', 1990, '0944556677', 'Bạc Liêu'),
('K008', 'Hồ Trung Tín', 2000, '0944119999', 'Phước Long'),
('K009', 'Trương Xuân Thi', 2001, '0909000111', 'Vĩnh Lợi'),
('K010', 'Ngô Văn Nam', 2001, '0909000112', 'Giá Rai');

-- Dữ liệu đơn hàng
INSERT INTO DONHANG (so_dh, id_nm, id_sp, so_luong, tong_tien) VALUES 
('001', 'K001', 'DE01', 2, 1300),
('001', 'K001', 'DE02', 1, 550),
('002', 'K002', 'LE01', 5, 3750),
('002', 'K002', 'LE02', 3, 1620),
('003', 'K002', 'TO01', 1, 630),
('004', 'K003', 'DE01', 2, 1300),
('005', 'K004', 'AS01', 4, 2080),
('005', 'K004', 'LE01', 6, 4500),
('005', 'K004', 'LE02', 8, 4320),
('006', 'K005', 'AS01', 5, 2600);