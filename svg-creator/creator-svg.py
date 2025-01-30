from PIL.Image import core as _imaging
import potrace

def raster_to_svg(input_image_path, output_svg_path):
    # Завантаження зображення та переведення його в ч/б
    image = Image.open(input_image_path).convert("L")
    threshold = 128
    image = image.point(lambda p: p > threshold and 255)

    # Конвертація растрового зображення в шлях
    bitmap = potrace.Bitmap(image)
    path = bitmap.trace()

    # Створення SVG-файлу
    with open(output_svg_path, "w") as svg_file:
        svg_file.write('<?xml version="1.0" encoding="UTF-8" standalone="no"?>\n')
        svg_file.write('<svg xmlns="http://www.w3.org/2000/svg">\n')

        for curve in path:
            svg_file.write('<path d="')
            for segment in curve:
                if segment.is_corner:
                    svg_file.write(f'M {segment.start_point.x},{segment.start_point.y} L {segment.c.x},{segment.c.y} ')
                else:
                    svg_file.write(f'C {segment.c1.x},{segment.c1.y} {segment.c2.x},{segment.c2.y} {segment.end_point.x},{segment.end_point.y} ')
            svg_file.write('" fill="black" />\n')

        svg_file.write('</svg>\n')

# Використання
raster_to_svg("logo.png", "logo.svg")
