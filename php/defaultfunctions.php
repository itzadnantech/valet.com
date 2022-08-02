<?php
    
function countryname($co_id){
    switch($co_id){
    case 1:
    return "Abu Dhabi";
    break;

    case 2:
    return "Ajman";
    break;

    case 3:
    return "Sharjah";
    break;

    case 4:
    return "Dubai";
    break;

    case 5:
    return "Fujairah";
    break;

    case 6:
    return "Ras Al Khaimah";
    break;

    case 7:
    return "Umm Al Quwain";
    break;

    case 8:
    return "KSA - Saudi Arabia";
    break;

    case 9:
    return "Kuwait";
    break;

    case 10:
    return "Qatar";
    break;

    case 11:
    return "Bahrain";
    break;

    case 12:
    return "Oman";
    break;
    }
}
function colorname($c_id){
    switch($c_id){
    case 6:
    return "Black";
    break;

    case 3:
    return "Blue";
    break;

    case 11:
    return "Brown";
    break;

    case 9:
    return "Golden";
    break;

    case 13:
    return "GRAY";
    break;

    case 12:
    return "Green";
    break;

    case 7:
    return "Maroon";
    break;

    case 14:
    return "orange";
    break;

    case 1:
    return "Red";
    break;

    case 4:
    return "silver";
    break;

    case 8:
    return "Violet";
    break;

    case 2:
    return "White";
    break;

    case 10:
    return "Yellow";
    break;
    }
}
function brandname($b_id){
       switch ($b_id) {
        case 62:
        return "AUDI";
        break;

        case 59:
        return "BENTALY";
        break;

        case 2:
        return "BMW";
        break;

        case 63:
        return "CADILLAC";
        break;

        case 7:
        return "Chevrolet";
        break;

        case 31:
        return "Corvette";
        break;

        case 51:
        return "DODGE";
        break;

        case 65:
        return "FIAT";
        break;

        case 61:
        return "FORD";
        break;

        case 30:
        return "Geely";
        break;

        case 60:
        return "GMC";
        break;

        case 55:
        return "HONDA";
        break;

        case 29:
        return "Hummer";
        break;

        case 56:
        return "HYUNDAI";
        break;

        case 10:
        return "Infiniti";
        break;

        case 57:
        return "ISUZU";
        break;

        case 58:
        return "JAGUAR";
        break;

        case 11:
        return "Jeep";
        break;

        case 50:
        return "kia";
        break;

        case 8:
        return "Lamborghini";
        break;

        case 49:
        return "Land Rover";
        break;

        case 12:
        return "Lexus";
        break;

        case 32:
        return "Lincoln";
        break;

        case 48:
        return "Lotus";
        break;

        case 47:
        return "Maserati";
        break;

        case 42:
        return "Maybach";
        break;

        case 46:
        return "Mazda";
        break;

        case 45:
        return "McLaren";
        break;

        case 4:
        return "Mercedes";
        break;

        case 44:
        return "Mercedes Benz";
        break;

        case 43:
        return "MG";
        break;

        case 41:
        return "Mini / Mini Cooper";
        break;

        case 52:
        return "MINI COOPER";
        break;

        case 5:
        return "Mitsubishi";
        break;

        case 28:
        return "Mustang";
        break;

        case 3:
        return "Nissan";
        break;

        case 40:
        return "Opel";
        break;

        case 9:
        return "Peugeot";
        break;

        case 39:
        return "Porsche";
        break;

        case 53:
        return "RANGE ROVER";
        break;

        case 6:
        return "Renault";
        break;

        case 38:
        return "Rolls Royce";
        break;

        case 64:
        return "seion";
        break;

        case 37:
        return "Skoda";
        break;

        case 27:
        return "Spyker";
        break;

        case 26:
        return "Ssangyong";
        break;

        case 25:
        return "SSC";
        break;

        case 13:
        return "Subaru";
        break;

        case 36:
        return "Suzuki";
        break;

        case 24:
        return "Tatra";
        break;

        case 35:
        return "Tesla";
        break;

        case 1:
        return "Toyota";
        break;

        case 23:
        return "Tramontana";
        break;

        case 22:
        return "Troller";
        break;

        case 21:
        return "TVR";
        break;

        case 20:
        return "UAZ";
        break;

        case 19:
        return "Vauxhall";
        break;

        case 18:
        return "Vector";
        break;

        case 17:
        return "Venturi";
        break;

        case 54:
        return "VOLKS WAGAN";
        break;

        case 34:
        return "Volkswagen";
        break;

        case 33:
        return "Volvo";
        break;

        case 16:
        return "Wiesmann";
        break;

        case 15:
        return "ZAZ";
        break;

        case 14:
        return "Zil";
        break;
        default:
            echo "None";
    }
}
?>