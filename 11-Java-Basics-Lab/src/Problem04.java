import java.util.Scanner;

public class SumIntegers {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int n = scanner.nextInt();
        int sum = 0;

        for (int i = 0; i < n; i++) {
            int number = scanner.nextInt();
            sum += number;
        }

        System.out.printf("Sum = %d", sum);
    }
}