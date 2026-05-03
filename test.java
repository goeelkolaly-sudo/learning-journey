
//وليد علي عبد الرافع

import java.util.Scanner;

public class FuelCalculator {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        // إدخال البيانات المطلوبة
        System.out.print("Enter Tank capacity (in lit): ");
        double tankCapacity = scanner.nextDouble();

        System.out.print("Enter traveled distance (in km): ");
        double distance = scanner.nextDouble();

        System.out.print("Enter Remaining fuel (in lit): ");
        double remainingFuel = scanner.nextDouble();

        // 1. حساب الوقود المستخدم
        double fuelUsed = tankCapacity - remainingFuel;

        // 2. حساب نسبة استخدام الخزان
        double usagePercentage = (fuelUsed / tankCapacity) * 100;

        // 3. حساب نسبة استهلاك الوقود لكل 100 كيلو
        double consumptionPer100Km = (fuelUsed / distance) * 100;

        // طباعة النتائج مع التقريب لخانين عشريتين
        System.out.println("\n--- Results ---");
        System.out.printf("Fuel used: %.2f lit\n", fuelUsed);
        System.out.printf("Tank usage percentage: %.2f%%\n", usagePercentage);
        System.out.printf("Fuel consumption per 100 km: %.2f%%\n", consumptionPer100Km);

        scanner.close();
    }
}