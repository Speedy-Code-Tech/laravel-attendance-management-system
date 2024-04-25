/**
 * Minified by jsDelivr using Terser v5.15.1.
 * Original file: /npm/@zxing/library@0.20.0/cjs/index.js
 *
 * Do NOT use SRI with dynamically generated files! More information: https://www.jsdelivr.com/using-sri-with-dynamic-files
 */
"use strict";
var __createBinding =
        (this && this.__createBinding) ||
        (Object.create
            ? function (e, r, t, o) {
                  void 0 === o && (o = t),
                      Object.defineProperty(e, o, {
                          enumerable: !0,
                          get: function () {
                              return r[t];
                          },
                      });
              }
            : function (e, r, t, o) {
                  void 0 === o && (o = t), (e[o] = r[t]);
              }),
    __exportStar =
        (this && this.__exportStar) ||
        function (e, r) {
            for (var t in e)
                "default" === t ||
                    r.hasOwnProperty(t) ||
                    __createBinding(r, e, t);
        };
Object.defineProperty(exports, "__esModule", { value: !0 }),
    __exportStar(require("./browser"), exports);
var ArgumentException_1 = require("./core/ArgumentException");
Object.defineProperty(exports, "ArgumentException", {
    enumerable: !0,
    get: function () {
        return ArgumentException_1.default;
    },
});
var ArithmeticException_1 = require("./core/ArithmeticException");
Object.defineProperty(exports, "ArithmeticException", {
    enumerable: !0,
    get: function () {
        return ArithmeticException_1.default;
    },
});
var ChecksumException_1 = require("./core/ChecksumException");
Object.defineProperty(exports, "ChecksumException", {
    enumerable: !0,
    get: function () {
        return ChecksumException_1.default;
    },
});
var Exception_1 = require("./core/Exception");
Object.defineProperty(exports, "Exception", {
    enumerable: !0,
    get: function () {
        return Exception_1.default;
    },
});
var FormatException_1 = require("./core/FormatException");
Object.defineProperty(exports, "FormatException", {
    enumerable: !0,
    get: function () {
        return FormatException_1.default;
    },
});
var IllegalArgumentException_1 = require("./core/IllegalArgumentException");
Object.defineProperty(exports, "IllegalArgumentException", {
    enumerable: !0,
    get: function () {
        return IllegalArgumentException_1.default;
    },
});
var IllegalStateException_1 = require("./core/IllegalStateException");
Object.defineProperty(exports, "IllegalStateException", {
    enumerable: !0,
    get: function () {
        return IllegalStateException_1.default;
    },
});
var NotFoundException_1 = require("./core/NotFoundException");
Object.defineProperty(exports, "NotFoundException", {
    enumerable: !0,
    get: function () {
        return NotFoundException_1.default;
    },
});
var ReaderException_1 = require("./core/ReaderException");
Object.defineProperty(exports, "ReaderException", {
    enumerable: !0,
    get: function () {
        return ReaderException_1.default;
    },
});
var ReedSolomonException_1 = require("./core/ReedSolomonException");
Object.defineProperty(exports, "ReedSolomonException", {
    enumerable: !0,
    get: function () {
        return ReedSolomonException_1.default;
    },
});
var UnsupportedOperationException_1 = require("./core/UnsupportedOperationException");
Object.defineProperty(exports, "UnsupportedOperationException", {
    enumerable: !0,
    get: function () {
        return UnsupportedOperationException_1.default;
    },
});
var WriterException_1 = require("./core/WriterException");
Object.defineProperty(exports, "WriterException", {
    enumerable: !0,
    get: function () {
        return WriterException_1.default;
    },
});
var BarcodeFormat_1 = require("./core/BarcodeFormat");
Object.defineProperty(exports, "BarcodeFormat", {
    enumerable: !0,
    get: function () {
        return BarcodeFormat_1.default;
    },
});
var Binarizer_1 = require("./core/Binarizer");
Object.defineProperty(exports, "Binarizer", {
    enumerable: !0,
    get: function () {
        return Binarizer_1.default;
    },
});
var BinaryBitmap_1 = require("./core/BinaryBitmap");
Object.defineProperty(exports, "BinaryBitmap", {
    enumerable: !0,
    get: function () {
        return BinaryBitmap_1.default;
    },
});
var DecodeHintType_1 = require("./core/DecodeHintType");
Object.defineProperty(exports, "DecodeHintType", {
    enumerable: !0,
    get: function () {
        return DecodeHintType_1.default;
    },
});
var InvertedLuminanceSource_1 = require("./core/InvertedLuminanceSource");
Object.defineProperty(exports, "InvertedLuminanceSource", {
    enumerable: !0,
    get: function () {
        return InvertedLuminanceSource_1.default;
    },
});
var LuminanceSource_1 = require("./core/LuminanceSource");
Object.defineProperty(exports, "LuminanceSource", {
    enumerable: !0,
    get: function () {
        return LuminanceSource_1.default;
    },
});
var MultiFormatReader_1 = require("./core/MultiFormatReader");
Object.defineProperty(exports, "MultiFormatReader", {
    enumerable: !0,
    get: function () {
        return MultiFormatReader_1.default;
    },
});
var MultiFormatWriter_1 = require("./core/MultiFormatWriter");
Object.defineProperty(exports, "MultiFormatWriter", {
    enumerable: !0,
    get: function () {
        return MultiFormatWriter_1.default;
    },
});
var PlanarYUVLuminanceSource_1 = require("./core/PlanarYUVLuminanceSource");
Object.defineProperty(exports, "PlanarYUVLuminanceSource", {
    enumerable: !0,
    get: function () {
        return PlanarYUVLuminanceSource_1.default;
    },
});
var Result_1 = require("./core/Result");
Object.defineProperty(exports, "Result", {
    enumerable: !0,
    get: function () {
        return Result_1.default;
    },
});
var ResultMetadataType_1 = require("./core/ResultMetadataType");
Object.defineProperty(exports, "ResultMetadataType", {
    enumerable: !0,
    get: function () {
        return ResultMetadataType_1.default;
    },
});
var RGBLuminanceSource_1 = require("./core/RGBLuminanceSource");
Object.defineProperty(exports, "RGBLuminanceSource", {
    enumerable: !0,
    get: function () {
        return RGBLuminanceSource_1.default;
    },
});
var ResultPoint_1 = require("./core/ResultPoint");
Object.defineProperty(exports, "ResultPoint", {
    enumerable: !0,
    get: function () {
        return ResultPoint_1.default;
    },
});
var System_1 = require("./core/util/System");
Object.defineProperty(exports, "ZXingSystem", {
    enumerable: !0,
    get: function () {
        return System_1.default;
    },
});
var StringBuilder_1 = require("./core/util/StringBuilder");
Object.defineProperty(exports, "ZXingStringBuilder", {
    enumerable: !0,
    get: function () {
        return StringBuilder_1.default;
    },
});
var StringEncoding_1 = require("./core/util/StringEncoding");
Object.defineProperty(exports, "ZXingStringEncoding", {
    enumerable: !0,
    get: function () {
        return StringEncoding_1.default;
    },
});
var Charset_1 = require("./core/util/Charset");
Object.defineProperty(exports, "ZXingCharset", {
    enumerable: !0,
    get: function () {
        return Charset_1.default;
    },
});
var Arrays_1 = require("./core/util/Arrays");
Object.defineProperty(exports, "ZXingArrays", {
    enumerable: !0,
    get: function () {
        return Arrays_1.default;
    },
});
var StandardCharsets_1 = require("./core/util/StandardCharsets");
Object.defineProperty(exports, "ZXingStandardCharsets", {
    enumerable: !0,
    get: function () {
        return StandardCharsets_1.default;
    },
});
var Integer_1 = require("./core/util/Integer");
Object.defineProperty(exports, "ZXingInteger", {
    enumerable: !0,
    get: function () {
        return Integer_1.default;
    },
});
var BitArray_1 = require("./core/common/BitArray");
Object.defineProperty(exports, "BitArray", {
    enumerable: !0,
    get: function () {
        return BitArray_1.default;
    },
});
var BitMatrix_1 = require("./core/common/BitMatrix");
Object.defineProperty(exports, "BitMatrix", {
    enumerable: !0,
    get: function () {
        return BitMatrix_1.default;
    },
});
var BitSource_1 = require("./core/common/BitSource");
Object.defineProperty(exports, "BitSource", {
    enumerable: !0,
    get: function () {
        return BitSource_1.default;
    },
});
var CharacterSetECI_1 = require("./core/common/CharacterSetECI");
Object.defineProperty(exports, "CharacterSetECI", {
    enumerable: !0,
    get: function () {
        return CharacterSetECI_1.default;
    },
});
var DecoderResult_1 = require("./core/common/DecoderResult");
Object.defineProperty(exports, "DecoderResult", {
    enumerable: !0,
    get: function () {
        return DecoderResult_1.default;
    },
});
var DefaultGridSampler_1 = require("./core/common/DefaultGridSampler");
Object.defineProperty(exports, "DefaultGridSampler", {
    enumerable: !0,
    get: function () {
        return DefaultGridSampler_1.default;
    },
});
var DetectorResult_1 = require("./core/common/DetectorResult");
Object.defineProperty(exports, "DetectorResult", {
    enumerable: !0,
    get: function () {
        return DetectorResult_1.default;
    },
});
var EncodeHintType_1 = require("./core/EncodeHintType");
Object.defineProperty(exports, "EncodeHintType", {
    enumerable: !0,
    get: function () {
        return EncodeHintType_1.default;
    },
});
var GlobalHistogramBinarizer_1 = require("./core/common/GlobalHistogramBinarizer");
Object.defineProperty(exports, "GlobalHistogramBinarizer", {
    enumerable: !0,
    get: function () {
        return GlobalHistogramBinarizer_1.default;
    },
});
var GridSampler_1 = require("./core/common/GridSampler");
Object.defineProperty(exports, "GridSampler", {
    enumerable: !0,
    get: function () {
        return GridSampler_1.default;
    },
});
var GridSamplerInstance_1 = require("./core/common/GridSamplerInstance");
Object.defineProperty(exports, "GridSamplerInstance", {
    enumerable: !0,
    get: function () {
        return GridSamplerInstance_1.default;
    },
});
var HybridBinarizer_1 = require("./core/common/HybridBinarizer");
Object.defineProperty(exports, "HybridBinarizer", {
    enumerable: !0,
    get: function () {
        return HybridBinarizer_1.default;
    },
});
var PerspectiveTransform_1 = require("./core/common/PerspectiveTransform");
Object.defineProperty(exports, "PerspectiveTransform", {
    enumerable: !0,
    get: function () {
        return PerspectiveTransform_1.default;
    },
});
var StringUtils_1 = require("./core/common/StringUtils");
Object.defineProperty(exports, "StringUtils", {
    enumerable: !0,
    get: function () {
        return StringUtils_1.default;
    },
});
var MathUtils_1 = require("./core/common/detector/MathUtils");
Object.defineProperty(exports, "MathUtils", {
    enumerable: !0,
    get: function () {
        return MathUtils_1.default;
    },
});
var WhiteRectangleDetector_1 = require("./core/common/detector/WhiteRectangleDetector");
Object.defineProperty(exports, "WhiteRectangleDetector", {
    enumerable: !0,
    get: function () {
        return WhiteRectangleDetector_1.default;
    },
});
var GenericGF_1 = require("./core/common/reedsolomon/GenericGF");
Object.defineProperty(exports, "GenericGF", {
    enumerable: !0,
    get: function () {
        return GenericGF_1.default;
    },
});
var GenericGFPoly_1 = require("./core/common/reedsolomon/GenericGFPoly");
Object.defineProperty(exports, "GenericGFPoly", {
    enumerable: !0,
    get: function () {
        return GenericGFPoly_1.default;
    },
});
var ReedSolomonDecoder_1 = require("./core/common/reedsolomon/ReedSolomonDecoder");
Object.defineProperty(exports, "ReedSolomonDecoder", {
    enumerable: !0,
    get: function () {
        return ReedSolomonDecoder_1.default;
    },
});
var ReedSolomonEncoder_1 = require("./core/common/reedsolomon/ReedSolomonEncoder");
Object.defineProperty(exports, "ReedSolomonEncoder", {
    enumerable: !0,
    get: function () {
        return ReedSolomonEncoder_1.default;
    },
});
var DataMatrixReader_1 = require("./core/datamatrix/DataMatrixReader");
Object.defineProperty(exports, "DataMatrixReader", {
    enumerable: !0,
    get: function () {
        return DataMatrixReader_1.default;
    },
});
var DecodedBitStreamParser_1 = require("./core/datamatrix/decoder/DecodedBitStreamParser");
Object.defineProperty(exports, "DataMatrixDecodedBitStreamParser", {
    enumerable: !0,
    get: function () {
        return DecodedBitStreamParser_1.default;
    },
});
var DefaultPlacement_1 = require("./core/datamatrix/encoder/DefaultPlacement");
Object.defineProperty(exports, "DataMatrixDefaultPlacement", {
    enumerable: !0,
    get: function () {
        return DefaultPlacement_1.default;
    },
});
var ErrorCorrection_1 = require("./core/datamatrix/encoder/ErrorCorrection");
Object.defineProperty(exports, "DataMatrixErrorCorrection", {
    enumerable: !0,
    get: function () {
        return ErrorCorrection_1.default;
    },
});
var HighLevelEncoder_1 = require("./core/datamatrix/encoder/HighLevelEncoder");
Object.defineProperty(exports, "DataMatrixHighLevelEncoder", {
    enumerable: !0,
    get: function () {
        return HighLevelEncoder_1.default;
    },
});
var SymbolInfo_1 = require("./core/datamatrix/encoder/SymbolInfo");
Object.defineProperty(exports, "DataMatrixSymbolInfo", {
    enumerable: !0,
    get: function () {
        return SymbolInfo_1.default;
    },
});
var constants_1 = require("./core/datamatrix/encoder/constants");
Object.defineProperty(exports, "DataMatrixSymbolShapeHint", {
    enumerable: !0,
    get: function () {
        return constants_1.SymbolShapeHint;
    },
});
var DataMatrixWriter_1 = require("./core/datamatrix/DataMatrixWriter");
Object.defineProperty(exports, "DataMatrixWriter", {
    enumerable: !0,
    get: function () {
        return DataMatrixWriter_1.default;
    },
});
var PDF417Reader_1 = require("./core/pdf417/PDF417Reader");
Object.defineProperty(exports, "PDF417Reader", {
    enumerable: !0,
    get: function () {
        return PDF417Reader_1.default;
    },
});
var PDF417ResultMetadata_1 = require("./core/pdf417/PDF417ResultMetadata");
Object.defineProperty(exports, "PDF417ResultMetadata", {
    enumerable: !0,
    get: function () {
        return PDF417ResultMetadata_1.default;
    },
});
var DecodedBitStreamParser_2 = require("./core/pdf417/decoder/DecodedBitStreamParser");
Object.defineProperty(exports, "PDF417DecodedBitStreamParser", {
    enumerable: !0,
    get: function () {
        return DecodedBitStreamParser_2.default;
    },
});
var ErrorCorrection_2 = require("./core/pdf417/decoder/ec/ErrorCorrection");
Object.defineProperty(exports, "PDF417DecoderErrorCorrection", {
    enumerable: !0,
    get: function () {
        return ErrorCorrection_2.default;
    },
});
var QRCodeReader_1 = require("./core/qrcode/QRCodeReader");
Object.defineProperty(exports, "QRCodeReader", {
    enumerable: !0,
    get: function () {
        return QRCodeReader_1.default;
    },
});
var QRCodeWriter_1 = require("./core/qrcode/QRCodeWriter");
Object.defineProperty(exports, "QRCodeWriter", {
    enumerable: !0,
    get: function () {
        return QRCodeWriter_1.default;
    },
});
var ErrorCorrectionLevel_1 = require("./core/qrcode/decoder/ErrorCorrectionLevel");
Object.defineProperty(exports, "QRCodeDecoderErrorCorrectionLevel", {
    enumerable: !0,
    get: function () {
        return ErrorCorrectionLevel_1.default;
    },
});
var FormatInformation_1 = require("./core/qrcode/decoder/FormatInformation");
Object.defineProperty(exports, "QRCodeDecoderFormatInformation", {
    enumerable: !0,
    get: function () {
        return FormatInformation_1.default;
    },
});
var Version_1 = require("./core/qrcode/decoder/Version");
Object.defineProperty(exports, "QRCodeVersion", {
    enumerable: !0,
    get: function () {
        return Version_1.default;
    },
});
var Mode_1 = require("./core/qrcode/decoder/Mode");
Object.defineProperty(exports, "QRCodeMode", {
    enumerable: !0,
    get: function () {
        return Mode_1.default;
    },
});
var DecodedBitStreamParser_3 = require("./core/qrcode/decoder/DecodedBitStreamParser");
Object.defineProperty(exports, "QRCodeDecodedBitStreamParser", {
    enumerable: !0,
    get: function () {
        return DecodedBitStreamParser_3.default;
    },
});
var DataMask_1 = require("./core/qrcode/decoder/DataMask");
Object.defineProperty(exports, "QRCodeDataMask", {
    enumerable: !0,
    get: function () {
        return DataMask_1.default;
    },
});
var Encoder_1 = require("./core/qrcode/encoder/Encoder");
Object.defineProperty(exports, "QRCodeEncoder", {
    enumerable: !0,
    get: function () {
        return Encoder_1.default;
    },
});
var QRCode_1 = require("./core/qrcode/encoder/QRCode");
Object.defineProperty(exports, "QRCodeEncoderQRCode", {
    enumerable: !0,
    get: function () {
        return QRCode_1.default;
    },
});
var MatrixUtil_1 = require("./core/qrcode/encoder/MatrixUtil");
Object.defineProperty(exports, "QRCodeMatrixUtil", {
    enumerable: !0,
    get: function () {
        return MatrixUtil_1.default;
    },
});
var ByteMatrix_1 = require("./core/qrcode/encoder/ByteMatrix");
Object.defineProperty(exports, "QRCodeByteMatrix", {
    enumerable: !0,
    get: function () {
        return ByteMatrix_1.default;
    },
});
var MaskUtil_1 = require("./core/qrcode/encoder/MaskUtil");
Object.defineProperty(exports, "QRCodeMaskUtil", {
    enumerable: !0,
    get: function () {
        return MaskUtil_1.default;
    },
});
var AztecReader_1 = require("./core/aztec/AztecReader");
Object.defineProperty(exports, "AztecCodeReader", {
    enumerable: !0,
    get: function () {
        return AztecReader_1.default;
    },
});
var AztecWriter_1 = require("./core/aztec/AztecWriter");
Object.defineProperty(exports, "AztecCodeWriter", {
    enumerable: !0,
    get: function () {
        return AztecWriter_1.default;
    },
});
var AztecDetectorResult_1 = require("./core/aztec/AztecDetectorResult");
Object.defineProperty(exports, "AztecDetectorResult", {
    enumerable: !0,
    get: function () {
        return AztecDetectorResult_1.default;
    },
});
var Encoder_2 = require("./core/aztec/encoder/Encoder");
Object.defineProperty(exports, "AztecEncoder", {
    enumerable: !0,
    get: function () {
        return Encoder_2.default;
    },
});
var HighLevelEncoder_2 = require("./core/aztec/encoder/HighLevelEncoder");
Object.defineProperty(exports, "AztecHighLevelEncoder", {
    enumerable: !0,
    get: function () {
        return HighLevelEncoder_2.default;
    },
});
var AztecCode_1 = require("./core/aztec/encoder/AztecCode");
Object.defineProperty(exports, "AztecCode", {
    enumerable: !0,
    get: function () {
        return AztecCode_1.default;
    },
});
var Decoder_1 = require("./core/aztec/decoder/Decoder");
Object.defineProperty(exports, "AztecDecoder", {
    enumerable: !0,
    get: function () {
        return Decoder_1.default;
    },
});
var Detector_1 = require("./core/aztec/detector/Detector");
Object.defineProperty(exports, "AztecDetector", {
    enumerable: !0,
    get: function () {
        return Detector_1.default;
    },
});
var Detector_2 = require("./core/aztec/detector/Detector");
Object.defineProperty(exports, "AztecPoint", {
    enumerable: !0,
    get: function () {
        return Detector_2.Point;
    },
});
var OneDReader_1 = require("./core/oned/OneDReader");
Object.defineProperty(exports, "OneDReader", {
    enumerable: !0,
    get: function () {
        return OneDReader_1.default;
    },
});
var EAN13Reader_1 = require("./core/oned/EAN13Reader");
Object.defineProperty(exports, "EAN13Reader", {
    enumerable: !0,
    get: function () {
        return EAN13Reader_1.default;
    },
});
var Code128Reader_1 = require("./core/oned/Code128Reader");
Object.defineProperty(exports, "Code128Reader", {
    enumerable: !0,
    get: function () {
        return Code128Reader_1.default;
    },
});
var ITFReader_1 = require("./core/oned/ITFReader");
Object.defineProperty(exports, "ITFReader", {
    enumerable: !0,
    get: function () {
        return ITFReader_1.default;
    },
});
var Code39Reader_1 = require("./core/oned/Code39Reader");
Object.defineProperty(exports, "Code39Reader", {
    enumerable: !0,
    get: function () {
        return Code39Reader_1.default;
    },
});
var Code93Reader_1 = require("./core/oned/Code93Reader");
Object.defineProperty(exports, "Code93Reader", {
    enumerable: !0,
    get: function () {
        return Code93Reader_1.default;
    },
});
var RSS14Reader_1 = require("./core/oned/rss/RSS14Reader");
Object.defineProperty(exports, "RSS14Reader", {
    enumerable: !0,
    get: function () {
        return RSS14Reader_1.default;
    },
});
var RSSExpandedReader_1 = require("./core/oned/rss/expanded/RSSExpandedReader");
Object.defineProperty(exports, "RSSExpandedReader", {
    enumerable: !0,
    get: function () {
        return RSSExpandedReader_1.default;
    },
});
var AbstractExpandedDecoder_1 = require("./core/oned/rss/expanded/decoders/AbstractExpandedDecoder");
Object.defineProperty(exports, "AbstractExpandedDecoder", {
    enumerable: !0,
    get: function () {
        return AbstractExpandedDecoder_1.default;
    },
});
var AbstractExpandedDecoderComplement_1 = require("./core/oned/rss/expanded/decoders/AbstractExpandedDecoderComplement");
Object.defineProperty(exports, "createAbstractExpandedDecoder", {
    enumerable: !0,
    get: function () {
        return AbstractExpandedDecoderComplement_1.createDecoder;
    },
});
var MultiFormatOneDReader_1 = require("./core/oned/MultiFormatOneDReader");
Object.defineProperty(exports, "MultiFormatOneDReader", {
    enumerable: !0,
    get: function () {
        return MultiFormatOneDReader_1.default;
    },
});
var CodaBarReader_1 = require("./core/oned/CodaBarReader");
Object.defineProperty(exports, "CodaBarReader", {
    enumerable: !0,
    get: function () {
        return CodaBarReader_1.default;
    },
});
//# sourceMappingURL=/sm/ee24f7be73a9c3e20ad2baf8f0b8b5f968d653be97ef54b5b9447bfda8de4fd7.map
